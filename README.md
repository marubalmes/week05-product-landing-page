# Week 5 – Responsive Product Landing Page

## Dolfo's Barbershop

A responsive product/service landing page created for **ITST 302 – Client-Server Technologies, Week 5 Laboratory Activity – Mini Project 04** using Laravel, Blade Components, and Tailwind CSS.

The project presents **Dolfo's Barbershop** in Santa Cruz, Laguna through a modern and responsive landing page.

---

## 1. Introduction

### What is a Product Landing Page?
A product landing page is a focused web page designed to present a product, service, business, or brand to visitors.

A landing page normally contains important information such as:
- Business or product information
- Main value proposition
- Features or services
- Pricing
- Testimonials
- Call-to-action
- Contact information

### Why Landing Pages Are Important
A landing page can serve as a business's first digital impression. A clear and well-designed landing page can help visitors understand the services being offered and quickly find important information.

For a local business such as a barbershop, a landing page can provide an organized online presentation of its services, location, team, and contact information.

### Purpose of This Project
The purpose of this project is to create a modern, responsive landing page for a real local business while applying:
- Laravel
- Blade Components
- Tailwind CSS
- Responsive Web Design
- Flexbox
- CSS Grid
- UI/UX principles

The project was developed according to the requirements of the ITST 302 Week 5 laboratory activity.

---

## 2. Business Information

**Business:** Dolfo's Barbershop

**Location:** A. Regidor Street, Barangay V, Santa Cruz, Laguna

**Barbers/Employees:**
- Mike
- Mel
- Unyo

The business information used in this academic project was based on the information available to the developer for the activity.

---

## 3. Project Objectives

The project aims to accomplish the following:
- Develop a responsive web interface using Tailwind CSS.
- Create reusable Laravel Blade Components.
- Apply responsive design principles.
- Organize frontend components using Laravel's view structure.
- Apply consistent typography, spacing, colors, and layouts.
- Demonstrate component-based frontend development.
- Practice Flexbox and CSS Grid.
- Build a professional portfolio project.
- Document the frontend architecture and development process.

---

## 4. Landing Page Sections

The landing page contains all required sections.

### Navigation Bar
The navigation includes:
- Dolfo's Barbershop branding
- Home
- Features
- Pricing
- Testimonials
- Contact
- Sign In
- Get Started

### Hero Section
The hero section contains:
- Business name
- Main headline (*"A fresh look starts at Dolfo's."*)
- Short description
- Primary CTA
- Secondary button
- Barbershop visual

### Features
The landing page contains six feature cards:
1. **Classic Haircuts**
2. **Skilled Team**
3. **Local Location**
4. **Convenient Visit**
5. **Shop Experience**
6. **Easy Contact**

Each feature includes an icon, title, and short description.

### Product Showcase
The product showcase presents the barbershop through:
- Shop image
- Interface/dashboard-style preview
- Mobile presentation
- Key highlights
- Employee information

*Although the laboratory activity uses the term "product showcase," this project adapts the section to represent the services and digital presentation of a local barbershop.*

### Pricing
The project contains three sample packages:

| Package | Sample Price |
| :--- | :--- |
| Starter | ₱150 |
| Professional | ₱250 |
| Premium | ₱350 |

*These prices are sample/demo values for the academic project and should not be treated as official Dolfo's Barbershop pricing.*

Each pricing card contains a package name, price, included features, and action button.

### Testimonials
The project includes three sample testimonial cards. The testimonials are clearly treated as sample/demo content because verified customer testimonials were not provided. Each card demonstrates a customer name, position, review, and customer visual.

### Call-to-Action
The CTA section encourages visitors to view packages or contact the shop.

### Footer
The footer contains business information, quick links, social media placeholders, contact information, and copyright notice.

---

## 5. Responsive Web Design

The landing page is designed and tested for desktop, laptop, tablet, and mobile devices.

### Mobile-First Design
The project uses responsive Tailwind CSS utilities to allow content to stack and resize appropriately on smaller screens.

Examples:
```html
class="grid-cols-1 md:grid-cols-3"
class="flex-col sm:flex-row"
```

### Flexbox & CSS Grid
- **Flexbox:** Used for navigation alignment, button groups, content alignment, and layout positioning (e.g., `flex items-center justify-between`).
- **CSS Grid:** Used for structured section layouts including feature cards, pricing cards, and testimonial cards (e.g., `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3`).

### Responsive Testing
The interface was verified using browser developer tools across various viewport dimensions. Screenshots of desktop, tablet, and mobile versions are included in the `screenshots/` directory.

---

## 6. Tailwind CSS

Tailwind CSS is a utility-first CSS framework used throughout the project. Instead of writing separate CSS rules for every element, utility classes are applied directly to Blade templates.

Examples used in the project:
```html
p-6 mt-12 rounded-2xl shadow-lg text-center font-bold
```

### Responsive Utilities
The project uses Tailwind responsive prefixes (`sm:`, `md:`, `lg:`) to alter layout structures dynamically. For example, `grid-cols-1 md:grid-cols-3` transforms a layout from a single column on mobile to three columns on desktop devices.

---

## 7. Laravel Blade Components

Blade Components are reusable interface elements in Laravel.

### Component Directory Structure
```
resources/views/components/
├── navbar.blade.php
├── hero.blade.php
├── feature-card.blade.php
├── pricing-card.blade.php
├── testimonial-card.blade.php
├── button.blade.php
├── footer.blade.php
└── showcase.blade.php
```

### Code Examples

**Feature Component Usage:**
```html
<x-feature-card
    icon="✂️"
    title="Classic Haircuts"
    description="Get a clean and polished haircut suited to your preferred style."
/>
```

**Pricing Component Usage:**
```html
<x-pricing-card
    name="Starter"
    price="₱150"
    description="A simple haircut package."
    :features="[
        'Basic haircut',
        'Professional service',
        'Local barber shop experience'
    ]"
/>
```

### Benefits
Blade Components provide reusability, maintainability, consistent UI design, reduced code duplication, modular development, and cleaner Blade templates.

---

## 8. Laravel Layout

The project uses the main Laravel layout:
```
resources/views/layouts/app.blade.php
```

The main page (`resources/views/pages/home.blade.php`) extends this layout:
```blade
@extends('layouts.app')

@section('content')
    <!-- Page Sections -->
@endsection
```

The layout file contains the primary HTML frame, asset inclusions (`@vite`), navigation placement, section views (`@yield('content')`), and footer rendering.

---

## 9. User Interface Design

### Color Palette
The design uses a restrained palette consisting of:
- **Primary Accent:** Red/Orange (Calls to action, key interactive elements)
- **Base Tones:** White, Light Gray, Dark Slate Gray

### Typography
The interface utilizes clean, modern sans-serif typography for maximum readability across screen sizes. Headings use heavier font weights (`font-bold`, `font-black`) while body text utilizes medium or normal weights.

### Iconography
Icons provide visual anchors for service features:
- ✂️ Haircuts
- 💈 Barbering
- 📍 Location
- 🕐 Convenience
- ⭐ Experience
- 📞 Contact

### Cards & UI Elements
Cards and buttons feature consistent border radii (`rounded-2xl`), subtle drop shadows (`shadow-lg`), structured padding, hover state transitions, and accessible contrast ratios.

---

## 10. Folder Structure

```
week05-product-landing-page/
├── app/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── layouts/
│       ├── components/
│       └── pages/
├── public/
│   └── images/
├── screenshots/
├── documentation/
├── routes/
└── README.md
```

- `resources/views/layouts`: Contains main Blade layouts.
- `resources/views/components`: Contains modular, reusable Blade Components.
- `resources/views/pages`: Contains main view templates.
- `public`: Holds compiled web assets and static images.
- `screenshots`: Houses documentation images of UI viewports.
- `documentation`: Contains additional architectural descriptions.

---

## 11. Before and After

The evolution from early scaffold to final polished interface demonstrates significant visual and architectural progression.

- **Before:** Basic HTML layout focusing purely on structure and raw content placement.
- **After:** Polished interface applying visual hierarchy, Tailwind styling, responsive Flexbox/Grid systems, reusable Blade components, and enhanced typography.

---

## 12. Screenshots

| File Name | Description |
| :--- | :--- |
| `01-before-design.png` | Initial prototype layout |
| `02-after-design.png` | Final polished interface |
| `03-desktop-layout.png` | Desktop viewport view |
| `04-tablet-layout.png` | Tablet viewport view |
| `05-mobile-layout.png` | Mobile viewport view |
| `06-navbar.png` | Navigation bar section |
| `07-hero.png` | Hero section |
| `08-features.png` | Features grid section |
| `09-pricing.png` | Pricing plans section |
| `10-testimonials.png` | Customer testimonials section |
| `11-footer.png` | Footer section |
| `12-vscode-project-structure.png` | VS Code workspace directory view |
| `13-blade-components-folder.png` | Blade Components folder structure |
| `14-github-repository.png` | Public GitHub repository interface |

---

## 13. Problems Encountered and Solutions

### Problem 1 – Blade `app-layout` Component Error
**Issue:** The landing page attempted to render `<x-app-layout>`, triggering `Unable to locate a class or view for component [app-layout]`.  
**Solution:** Updated `pages/home.blade.php` to extend the main layout directive (`@extends('layouts.app')`) with `@section('content')`, matching the `resources/views/layouts/app.blade.php` directory structure.

### Problem 2 – Axios/Vite Import Error
**Issue:** Vite threw `Failed to resolve import "axios" from "resources/js/bootstrap.js"` during bundling.  
**Solution:** Removed the unused Axios import from `resources/js/bootstrap.js` as no external API requests were necessary for this static landing page.

### Problem 3 – Responsive Layout Alignment
**Issue:** Certain layout sections broke or overlapped when viewed on smaller tablet and mobile screens.  
**Solution:** Applied Tailwind breakpoint prefixes (`sm:`, `md:`, `lg:`) alongside Flexbox stack utilities (`flex-col sm:flex-row`) and Grid column rules (`grid-cols-1 md:grid-cols-3`) to allow elements to reflow smoothly.

---

## 14. Technologies Used

| Technology | Purpose |
| :--- | :--- |
| **Laravel** | Web application framework |
| **PHP** | Server-side execution language |
| **Blade** | Laravel templating engine |
| **Blade Components** | Reusable UI components |
| **Tailwind CSS** | Utility-first styling framework |
| **Vite** | Frontend build tool and asset bundler |
| **JavaScript** | Client-side interactions |
| **HTML5** | Document structure |
| **Git & GitHub** | Version control and remote hosting |

---

## 15. GitHub Repository & Commit History

**Repository Name:** `week05-product-landing-page`  
**Visibility:** Public

### Commit Log Overview
1. `chore: initialize Laravel project`
2. `feat: add main Blade layout`
3. `feat: add reusable button component`
4. `feat: add responsive navigation bar`
5. `feat: add Dolfo's Barbershop hero section`
6. `feat: add reusable feature cards`
7. `feat: add product showcase section`
8. `feat: add pricing and testimonial sections`
9. `feat: added footer sections`
10. `feat: updated the homepage`
11. `feat: upgraded the design for landing page`
12. `docu: added screenshots of project`
13. `docu: added documentation and readME`

---

## 16. Submission Checklist

- [/] Responsive landing page completed
- [/] Navigation implemented
- [/] Hero section implemented
- [/] Six features implemented
- [/] Product showcase implemented
- [/] Three pricing plans implemented
- [/] Three testimonials implemented
- [/] CTA implemented
- [/] Footer implemented
- [/] Blade Components created and reused
- [/] Tailwind CSS used throughout
- [/] Desktop tested
- [/] Tablet tested
- [/] Mobile tested
- [/] Public GitHub repository created
- [/] Minimum 10 meaningful Git commits
- [/] README completed
- [/] Before-and-after comparison included
- [/] Screenshots folder completed
- [/] LinkedIn post published
- [/] Repository link submitted through LMS

---

## 17. Reflection

This project helped me understand how Laravel, Blade Components, and Tailwind CSS can be combined to create a responsive and reusable landing page.

One of the main challenges was organizing the interface into reusable components while keeping the design consistent across desktop, tablet, and mobile layouts. I also learned how responsive Tailwind utilities can simplify the development of flexible layouts.

Overall, the project improved my understanding of Laravel frontend organization, component-based development, responsive web design, Tailwind CSS, and UI/UX principles.