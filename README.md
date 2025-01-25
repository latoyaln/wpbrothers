# Social Brothers WordPress Case - Latoya

This repository contains my solution for the [Social Brothers Developer](https://github.com/WP-Brothers/wpb-case-pub) interview case. The goal of this case is to showcase my abilities in WordPress, PHP, JavaScript (or TypeScript), (S)CSS, and Tailwind development by building a fully functioning, responsive website based on the provided design and technical specifications.

## Case Requirements

**General**

- Do not use any plugins
- Build upon the existing file structure and files.
- Try to write your own code as much as possible.
- We encourage writing component based code! This means reusing similar code, instead of writing the same functionality multiple times.
- Seperate presentation and logic in your code from each other as much as possible

**Design**

- Recreate the [design](https://www.figma.com/design/w5SUZpNGiXOKgJZ3FdAyhh/WP-Brothers---Development-case?node-id=2003-18423&m=dev) pixel perfect as a fully working website.
- Make sure the website is fully responsive on mobile and tablet devices
- The mobile menu must be collapsible
- The header must be fixed on mobile
  
**Scripting and styling**

- Do not use jQuery. Write vanilla JavaScript or TypeScript (optional).
- Write your styling using Tailwind classes, or with SCSS/CSS using the BEM (Block Element Modifier) naming methodology.
- If you are not using Tailwind, Bootstrap is available for responsive classes (see Already Included)).
  
## What was done?

**General Overview**
I started by following the provided instructions and built the theme from scratch, based on the existing file structure. The focus was on writing reusable, component-based code to ensure modularity and scalability. I made sure to separate the presentation (styling) and logic (PHP, JS) as much as possible.

**Design**
I recreated the design as closely as possible, making sure the layout is pixel-perfect and fully responsive on mobile, tablet, and desktop devices. The mobile menu is collapsible, and the header remains fixed on mobile, as per the requirements.

**Scripting and Styling**
I adhered to the requirements of using vanilla JavaScript (without jQuery) and SCSS for styling, utilizing the BEM (Block Element Modifier) methodology for CSS classes. I also used Tailwind for utility-first styling, which allowed me to quickly style elements while keeping the codebase clean and manageable.

**Responsive Design**
All pages were tested for responsiveness, and the layout adjusts seamlessly across different screen sizes. Specific attention was paid to ensure the mobile menu functions as a collapsible element and the header is fixed on mobile, as specified in the brief.

**Additional Features:**
FontAwesome: Integrated FontAwesome for icons where needed.
Google Fonts: Used Roboto and Open Sans as specified in the design.
Tailwind CSS: Utilized Tailwind for styling, but also used SCSS for custom styles and the implementation of the BEM naming convention.
Current Status

The current version of the site includes the homepage, a few internal pages, and the basic layout structure. It is fully functional with responsive design in place. However, some features, like animations or more advanced interactivity, still need to be implemented.

## How the code is organized:

PHP: Located within the wpbrothers theme folder. I’ve used custom post types and flexible content fields for dynamic content areas, making the website easily editable within the WordPress backend.
JavaScript/TypeScript: All scripts are written in /src/scripts/main.ts. I opted for vanilla JavaScript (with the option to use TypeScript). It handles dynamic interactions like the collapsible menu, modals, and other interactive elements.
SCSS/CSS: All styling is written in /src/styles/main.scss. Tailwind is used for utility classes, and additional custom styles are added as per the design specifications. The BEM methodology ensures clarity and maintainability.
Images: The images from the design are stored in the /assets/images folder.

## Submit Requirements 

The entire wpbrothers theme folder as an zip.
An exported WordPress database.
