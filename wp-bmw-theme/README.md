# WP BMW Theme

A custom WordPress theme for JAX BEAMERS - BMW Performance and Service in Jacksonville.

## Description

This theme features a modern, responsive design with BMW M colors and styling. It's specifically designed for automotive service businesses, particularly BMW specialists.

## Features

- Responsive design that works on all devices
- BMW M-inspired color scheme (light blue, dark blue, red)
- Custom hero section with animated stripes
- Service features showcase
- Contact information management
- Custom navigation menus
- Google Fonts integration (Inter font family)
- Clean, modern design

## Installation

1. Download or clone this theme
2. Zip the `wp-bmw-theme` folder
3. In WordPress admin, go to Appearance > Themes
4. Click "Add New" > "Upload Theme"
5. Upload the zip file and activate

## Customization

### Theme Customizer

The theme includes customizer options for:
- Phone number
- Email address
- Business address

Access via Appearance > Customize > Contact Information

### Menus

Set up your navigation menus:
1. Go to Appearance > Menus
2. Create menus for "Primary Menu" and "Footer Menu"
3. Assign them to the respective menu locations

### Home Page

The theme uses `front-page.php` as the home page template. To use it:
1. Create a new page titled "Home" 
2. Go to Settings > Reading
3. Set "Your homepage displays" to "A static page"
4. Select your "Home" page as the homepage

## Theme Structure

```
wp-bmw-theme/
├── style.css (Main stylesheet with WordPress theme header)
├── index.php (Main template)
├── front-page.php (Home page template)
├── functions.php (Theme functions and setup)
├── header.php (Site header)
├── footer.php (Site footer)
├── page.php (Single page template)
├── single.php (Single post template)
├── archive.php (Archive template)
├── 404.php (404 error page)
├── screenshot.png (Theme screenshot)
├── assets/
│   ├── images/ (All images and icons)
│   └── js/
│       └── main.js (JavaScript functionality)
└── template-parts/
    └── feature-card.php (Feature card component)
```

## Dependencies

- Google Fonts (Inter font family)
- Modern browsers with CSS Grid and Flexbox support
- WordPress 5.0+

## Browser Support

- Chrome 60+
- Firefox 55+
- Safari 12+
- Edge 79+

## License

This theme is provided as-is for the specific use case. All images and content are specific to JAX BEAMERS business.

## Support

This theme was created for JAX BEAMERS and includes all necessary assets and functionality from the original local development environment.