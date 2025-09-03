#!/bin/bash

# Script to automatically organize flat images into folders based on company names
# This will create subdirectories for each company and copy their images there
# IMPORTANT: Uses cp -p to preserve original Modified timestamps for proper sorting

# Configuration
SOURCE_FOLDER="/home/ivan/Documents/PhotoForExpoNew/"
OUTPUT_FOLDER="/home/ivan/Documents/PhotoForExpoNew/output_folder/"

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

echo -e "${GREEN}Starting to organize images into folders...${NC}"

# Check if source folder exists
if [ ! -d "$SOURCE_FOLDER" ]; then
    echo -e "${RED}Error: Source folder not found: $SOURCE_FOLDER${NC}"
    exit 1
fi

# Create output folder if it doesn't exist
mkdir -p "$OUTPUT_FOLDER"

# Get all image files from source folder
cd "$SOURCE_FOLDER"
IMAGE_FILES=(*.jpg *.jpeg *.png *.gif *.webp)
cd - > /dev/null

# Filter out non-existent files and get valid images
valid_images=()
for img in "${IMAGE_FILES[@]}"; do
    if [ -f "$SOURCE_FOLDER$img" ]; then
        valid_images+=("$img")
    fi
done

if [ ${#valid_images[@]} -eq 0 ]; then
    echo -e "${RED}No image files found in: $SOURCE_FOLDER${NC}"
    exit 1
fi

echo -e "${GREEN}Found ${#valid_images[@]} image files to organize${NC}"

# Process each image file
counter=1
for image_file in "${valid_images[@]}"; do
    # Extract company name from filename (remove numbers and extensions)
    company_name=$(echo "$image_file" | sed 's/[0-9].*//' | sed 's/\.[^.]*$//' | sed 's/_$//' | sed 's/-$//')
    
    # Skip empty names
    if [ -z "$company_name" ]; then
        echo -e "${YELLOW}Skipping image with empty company name: $image_file${NC}"
        continue
    fi
    
    echo -e "${YELLOW}Processing image: $image_file (company: $company_name) ($counter/${#valid_images[@]})${NC}"
    
    # Create company folder if it doesn't exist
    company_folder="$OUTPUT_FOLDER$company_name"
    if [ ! -d "$company_folder" ]; then
        mkdir -p "$company_folder"
        echo -e "  Created folder: $company_name"
    fi
    
    # Copy image to company folder (preserve original timestamps)
    source_path="$SOURCE_FOLDER$image_file"
    dest_path="$company_folder/$image_file"
    
    if cp -p "$source_path" "$dest_path"; then
        echo -e "  ✓ Moved: $image_file → $company_name/ (timestamps preserved)"
    else
        echo -e "  ✗ Failed to move: $image_file"
    fi
    
    ((counter++))
done

echo -e ""
echo -e "${GREEN}Organization completed!${NC}"
echo -e "${GREEN}Images have been organized into folders in: $OUTPUT_FOLDER${NC}"
echo -e ""
echo -e "${YELLOW}Next steps:${NC}"
echo -e "1. Check the organized folders in: $OUTPUT_FOLDER"
echo -e "2. Run the add_stands_to_exclusive.sh script to import the organized stands"
echo -e "3. Clear Grav cache: bin/grav clearcache"
