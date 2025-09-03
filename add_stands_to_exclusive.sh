#!/bin/bash

# Script to add all stands from PhotoForExpo output folder to existing exclusive stands section
# This will make all stands visible in the admin panel under "Эксклюзивные стенды"

# Configuration
OUTPUT_FOLDER="/home/ivan/Documents/PhotoForExpoNew/output_folder/"
# Target the correct Russian page inside Эксклюзивные стенды
EXCLUSIVE_STANDS_FILE="/home/ivan/grav-admin/user/pages/03.uslugi/01.razrabotka-stendov/03.ekskluziv/blog.ru.md"

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

echo -e "${GREEN}Starting to add stands to existing exclusive stands section...${NC}"

# Check if output folder exists
if [ ! -d "$OUTPUT_FOLDER" ]; then
    echo -e "${RED}Error: Output folder not found: $OUTPUT_FOLDER${NC}"
    exit 1
fi

# Check if exclusive stands file exists
if [ ! -f "$EXCLUSIVE_STANDS_FILE" ]; then
    echo -e "${RED}Error: Exclusive stands file not found: $EXCLUSIVE_STANDS_FILE${NC}"
    exit 1
fi

# Get all stand folders
cd "$OUTPUT_FOLDER"
STAND_FOLDERS=(*/)
cd - > /dev/null

if [ ${#STAND_FOLDERS[@]} -eq 0 ]; then
    echo -e "${RED}No stand folders found in: $OUTPUT_FOLDER${NC}"
    exit 1
fi

echo -e "${GREEN}Found ${#STAND_FOLDERS[@]} stand folders${NC}"

# Create a backup of the original file
cp "$EXCLUSIVE_STANDS_FILE" "${EXCLUSIVE_STANDS_FILE}.backup"
echo -e "${GREEN}Created backup: ${EXCLUSIVE_STANDS_FILE}.backup${NC}"

# Start building the new content
NEW_CONTENT=""

# Read the header section (everything before the gallery)
# Keep YAML frontmatter from start up to (but excluding) the first 'gallery:' key
HEADER_SECTION=$(sed '/^gallery:/q' "$EXCLUSIVE_STANDS_FILE" | head -n -1)

# Add the header section and ensure a newline before starting the gallery key
# (avoids merging 'template: stand-page' with 'gallery:' on the same line)
NEW_CONTENT="$HEADER_SECTION"$'\n'

# Add gallery section start
NEW_CONTENT+="gallery:"$'\n'

# Process each stand folder
counter=1
# First pass: collect all stands with their first image timestamp for sorting
declare -a stand_data
for stand_folder in "${STAND_FOLDERS[@]}"; do
    stand_name="${stand_folder%/}"
    
    # Skip empty or invalid folders
    if [ -z "$stand_name" ] || [ "$stand_name" = "." ] || [ "$stand_name" = ".." ]; then
        continue
    fi
    
    echo -e "${YELLOW}Collecting data for stand: $stand_name ($counter/${#STAND_FOLDERS[@]})${NC}"
    
    # Get all images from the stand folder
    image_files=()
    
    # Debug: show what we're looking for
    echo -e "  Looking in: \"$OUTPUT_FOLDER$stand_name\""
    
    # Find all image files in the stand folder
    while IFS= read -r -d '' img; do
        if [ -f "$img" ]; then
            image_files+=("$img")
            echo -e "    Found: $(basename "$img")"
        fi
    done < <(find "$OUTPUT_FOLDER$stand_name" -maxdepth 1 -type f \( -iname "*.jpg" -o -iname "*.jpeg" -o -iname "*.png" -o -iname "*.gif" -o -iname "*.webp" \) -print0)
    
    echo -e "  Total images found: ${#image_files[@]}"
    
    if [ ${#image_files[@]} -eq 0 ]; then
        echo -e "${YELLOW}  Warning: No images found in $stand_name${NC}"
        continue
    fi
    
    # Get timestamp of first image for sorting (newest first)
    # Use the Modified timestamp, not creation time
    first_image="${image_files[0]}"
    
    # Get the Modified timestamp using stat -c %Y (last modification time)
    # This is more reliable than creation time for sorting by when photos were actually modified
    timestamp=$(stat -c %Y "$first_image")
    
    # Debug: show the timestamp we're using for sorting
    echo -e "    First image: $(basename "$first_image") - Modified: $(date -d @$timestamp)"
    
    # Store stand data for sorting - use a different separator and quote the paths
    stand_data+=("$timestamp|$stand_name|$(printf '%s\n' "${image_files[@]}" | tr '\n' '|')")
    
    ((counter++))
done

# Sort stands by timestamp (newest first)
echo -e "${GREEN}Sorting stands by Modified timestamp (newest first)...${NC}"

# Sort numerically by timestamp (field 1) in reverse order (newest first)
# Use -n for numeric sort, -r for reverse order, -t'|' for pipe separator
IFS=$'\n' sorted_stands=($(printf '%s\n' "${stand_data[@]}" | sort -t'|' -k1,1 -nr))
unset IFS

# Debug: show the first few sorted entries
echo -e "${YELLOW}First 5 stands after sorting (newest first):${NC}"
for i in {0..4}; do
    if [ $i -lt ${#sorted_stands[@]} ]; then
        IFS='|' read -r timestamp stand_name images_string <<< "${sorted_stands[$i]}"
        echo -e "  $((i+1)). $stand_name - Modified: $(date -d @$timestamp)"
    fi
done
echo ""

# Second pass: process stands in sorted order
counter=1
echo -e "${GREEN}Processing stands in Modified timestamp order (newest first):${NC}"
for stand_entry in "${sorted_stands[@]}"; do
    IFS='|' read -r timestamp stand_name images_string <<< "$stand_entry"
    unset IFS
    
    # Convert images string back to array
    IFS='|' read -ra image_files <<< "$images_string"
    
    echo -e "${YELLOW}Processing stand: $stand_name ($counter/${#sorted_stands[@]}) - Modified: $(date -d @$timestamp)${NC}"
    echo -e "  Images to process: ${#image_files[@]}"
    
    # Copy images to exclusive stands folder
    copied_images=()
    for image_file in "${image_files[@]}"; do
        if [ -f "$image_file" ]; then
            image_name=$(basename "$image_file")
            
            # Skip thumbnail images (those ending with _s, _b, _sr)
            if [[ "$image_name" == *_s.* ]] || [[ "$image_name" == *_b.* ]] || [[ "$image_name" == *_sr.* ]]; then
                echo -e "    Skipping thumbnail: $image_name"
                continue
            fi
            
            # Copy image to exclusive stands folder
            dest_image="/home/ivan/grav-admin/user/pages/03.uslugi/01.razrabotka-stendov/03.ekskluziv/$image_name"
            if cp "$image_file" "$dest_image"; then
                copied_images+=("$image_name")
                echo -e "    Copied: $image_name"
            else
                echo -e "    Failed to copy: $image_name"
            fi
        else
            echo -e "    File not found: $image_file"
        fi
    done
    
    if [ ${#copied_images[@]} -eq 0 ]; then
        echo -e "${YELLOW}  Warning: No valid images copied for $stand_name${NC}"
        continue
    fi
    
    # Add gallery item for this stand
    NEW_CONTENT+="    -"$'\n'
    NEW_CONTENT+="        title: 'Эксклюзивный стенд для компании \"$stand_name\"'"$'\n'
    NEW_CONTENT+="        images:"$'\n'
    
    # Add images for this stand
    for ((i=0; i<${#copied_images[@]}; i++)); do
        image_name="${copied_images[$i]}"
        is_main=$([ $i -eq 0 ] && echo "true" || echo "false")
        
        NEW_CONTENT+="            -"$'\n'
        NEW_CONTENT+="                is_main: $is_main"$'\n'
        NEW_CONTENT+="                image_upload:"$'\n'
        NEW_CONTENT+="                    user/pages/03.uslugi/01.razrabotka-stendov/03.ekskluziv/$image_name:"$'\n'
        NEW_CONTENT+="                        name: $image_name"$'\n'
        NEW_CONTENT+="                        full_path: $image_name"$'\n'
        NEW_CONTENT+="                        type: image/jpeg"$'\n'
        NEW_CONTENT+="                        size: $(stat -c %s "/home/ivan/grav-admin/user/pages/03.uslugi/01.razrabotka-stendov/03.ekskluziv/$image_name")"$'\n'
        NEW_CONTENT+="                        path: user/pages/03.uslugi/01.razrabotka-stendov/03.ekskluziv/$image_name"$'\n'
    done
    
    # Add minimal metadata for this stand
    NEW_CONTENT+="        company_name: '$stand_name'"$'\n'
    
    echo -e "${GREEN}  ✓ Added stand: $stand_name with ${#copied_images[@]} images${NC}"
    ((counter++))
done

# Add the content section (everything after the YAML frontmatter)
# Find the closing '---' of the YAML frontmatter (second occurrence of a line that is exactly ---)
CLOSING_LINE=$(awk '/^---$/ {count++; if (count==2) {print NR; exit}}' "$EXCLUSIVE_STANDS_FILE")
if [ -z "$CLOSING_LINE" ]; then
    echo -e "${RED}Error: Could not locate the end of YAML frontmatter in: $EXCLUSIVE_STANDS_FILE${NC}"
    exit 1
fi
CONTENT_SECTION=$(tail -n +$((CLOSING_LINE+1)) "$EXCLUSIVE_STANDS_FILE")

# Close the YAML frontmatter and append the original markdown body
NEW_CONTENT+=$'---\n'
NEW_CONTENT+="$CONTENT_SECTION"

# Write the new content to the file
echo "$NEW_CONTENT" > "$EXCLUSIVE_STANDS_FILE"

if [ $? -eq 0 ]; then
    echo -e "\n${GREEN}Completed! All stands have been added to the exclusive stands section.${NC}"
    echo -e "${GREEN}They will now be visible in the admin panel under 'Эксклюзивные стенды'.${NC}"
    echo -e "\n${YELLOW}Next steps:${NC}"
    echo -e "1. Clear Grav cache: bin/grav clear-cache"
    echo -e "2. Check the admin panel to see all stands"
    echo -e "3. Edit stand details and add specific information"
else
    echo -e "\n${RED}Error: Failed to update the exclusive stands file${NC}"
    echo -e "${YELLOW}Restoring backup...${NC}"
    cp "${EXCLUSIVE_STANDS_FILE}.backup" "$EXCLUSIVE_STANDS_FILE"
fi