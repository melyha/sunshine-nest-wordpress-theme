# Sunshine Nest Daycare - WordPress Theme

A custom WordPress classic theme for Sunshine Nest Daycare Center, built as a learning project to demonstrate theme development skills.

## Project Information

- **Theme Type:** Classic WordPress Theme
- **Version:** 1.0.0
- **Author:** Maleeha
- **Purpose:** Educational project for CMS theme development

## Features

- Custom logo support in header  
- Comprehensive WordPress Customizer integration for all homepage images
- Background images with placeholders   
- Custom homepage template with multiple sections
- Responsive design with mobile-first approach
- About Section with customizable feature image
- Programs Section with customizable background and card images
- News/blog section with latest posts integration
- Gallery section with customizable background and grid images
- Sticky header navigation
- Custom navigation menus (Primary & Footer)

## Customizer Settings

Navigate to **Appearance → Customize** to change:

- **Site Identity:** Logo, site title, tagline
- **Homepage Images:** All homepage images

 ### Homepage Images
 Customize all major homepage section backgrounds and images:
 - **Hero Background Image** - Main banner background
 - **What Makes Us Special Image** - About section feature image
 - **Programs Section Background** - Background for programs section
 - **Gallery Section Background** - Background for gallery section

### Program Images
Individual program card images:
- **Daycare Center Image**
- **Children's Programs Image**
- **Out of School Care Image**

### Gallery Images
Customizable gallery grid images:
- **Gallery Image 1-8** - Individual gallery photos

### Additional Settings
- **Menus:** Primary and footer navigation
- **Colors:** Background color settings

## Development

### Adding New Customizer Options

Edit `functions.php` and add to the `mytheme_customize_register()` function

### Commit History

Key commits in this project:
- Initial theme setup and file structure
- Add .gitignore to exclude images and WordPress files
- Add theme setup with featured image and customizer support
- Add customizer support for homepage images
- Add image integration to header and front page templates
- Add customizer settings for programs/gallery backgrounds, program cards, and gallery images
- Update front-page to use images from customizer with placeholders
- Update programs and gallery sections CSS to support background images
- Update README


Resources
- [WordPress Theme Handbook](https://developer.wordpress.org/themes/)
- [WordPress Customizer API](https://developer.wordpress.org/themes/customize-api/)

## Credits
Design based on Figma prototype created for Sunshine Nest Daycare Center.
