# Multiple File Upload Functionality

## Overview

The form on the "Заявка" (Application) page has been updated to support multiple file uploads. Users can now attach up to 10 files of various types to their application.

## Features

### Supported File Types
- **Documents**: PDF, DOC, DOCX, XLS, XLSX, PPT, PPTX, TXT
- **Images**: JPG, JPEG, PNG, GIF, BMP, TIFF
- **Archives**: ZIP, RAR

### File Limits
- **Maximum files per submission**: 10
- **Maximum file size**: 10MB per file
- **Total upload size**: Up to 100MB (10 files × 10MB)

### User Interface Features
- **Drag & Drop**: Users can drag files directly onto the upload area
- **Click to Select**: Traditional file browser selection
- **File Preview**: Shows selected files with icons, names, and sizes
- **Remove Files**: Individual file removal before submission
- **Visual Feedback**: Hover effects and drag-over states

## Technical Implementation

### Form Configuration
The form has been updated in `user/pages/06.otpravit-zayavku/form.md`:

```yaml
- name: files
  label: Прикрепить файлы
  type: file
  multiple: true
  limit: 10
  filesize: 10
  destination: 'user://pages/06.otpravit-zayavku/uploads'
  avoid_overwriting: true
  random_name: true
  accept:
    - .pdf
    - .doc
    - .docx
    - .xls
    - .xlsx
    - .ppt
    - .pptx
    - .jpg
    - .jpeg
    - .png
    - .gif
    - .bmp
    - .tiff
    - .zip
    - .rar
    - .txt
```

### Email Template
A custom email template has been created at `user/templates/forms/data.html.twig` that:
- Displays all uploaded files in the email
- Shows file names, sizes, and types
- Provides a summary of total files attached
- Uses proper styling for better readability

### Form Plugin Configuration
Updated `user/config/plugins/form.yaml` to:
- Enable multiple file uploads globally
- Increase file size limits to 10MB
- Add support for additional file types
- Configure proper MIME type acceptance

### Custom Form Template
Created `user/templates/forms/default/form.html.twig` with:
- Enhanced file upload UI
- Drag and drop functionality
- File preview with icons
- Client-side validation
- Responsive design

## File Storage

### Upload Directory
Files are stored in: `user/pages/06.otpravit-zayavku/uploads/`

### File Naming
- Random names are generated to prevent conflicts
- Original file extensions are preserved
- Files are organized by submission date

## Email Integration

### Attachments
- Files are automatically attached to the email
- Email includes a detailed list of all uploaded files
- File information is displayed in a formatted section

### Email Content
The email now includes:
- All form field data
- List of attached files with details
- File count summary
- Proper formatting for better readability

## Security Features

### File Validation
- Client-side file type validation
- Server-side MIME type checking
- File size limits enforced
- Maximum file count validation

### Upload Security
- Random file naming prevents conflicts
- Files stored in dedicated upload directory
- Proper file permissions
- Input sanitization

## Usage Instructions

### For Users
1. Navigate to the "Заявка" page
2. Fill out the form fields
3. In the "Прикрепить файлы" section:
   - Click the upload area or drag files directly
   - Select up to 10 files
   - Review selected files in the preview
   - Remove unwanted files if needed
4. Submit the form

### For Administrators
- Monitor upload directory for new files
- Check email notifications for file details
- Files are automatically organized by submission

## Troubleshooting

### Common Issues
1. **File too large**: Ensure files are under 10MB
2. **Too many files**: Limit to 10 files per submission
3. **Unsupported file type**: Check the list of accepted formats
4. **Upload fails**: Check server permissions and disk space

### Server Requirements
- PHP file upload limits configured
- Adequate disk space for uploads
- Proper directory permissions
- Email server configured for attachments

## Future Enhancements

Potential improvements:
- Image preview for uploaded images
- Progress bars for large uploads
- File compression for images
- Cloud storage integration
- Advanced file management interface 