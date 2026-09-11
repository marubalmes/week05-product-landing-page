# Responsive Web Design

## 1. Overview

Responsive web design allows the Dolfo's Barbershop landing page to adapt seamlessly across different screen sizes and devices.

The project was designed and optimized to support:
- Desktop computers
- Laptops
- Tablets
- Mobile phones

---

## 2. Mobile-First Design

The interface utilizes responsive Tailwind CSS utilities so content scales naturally from small mobile screens up to large desktop viewports.

Key features of the mobile layout include:
- Single-column section layouts
- Vertically stacked button groups
- Clean, compact navigation
- Flexible content widths and padding
- Adaptive typography and spacing

---

## 3. Responsive Breakpoints

Tailwind CSS responsive breakpoint prefixes (`sm:`, `md:`, `lg:`) are used to modify layouts dynamically depending on viewport width.

### Layout Grid Example
```html
class="grid grid-cols-1 md:grid-cols-3"
```
The layout begins as a single column on mobile screens and expands to a three-column layout on medium (`md`) and larger viewports.

### Flex Direction Example
```html
class="flex flex-col sm:flex-row"
```
Buttons and CTA elements stack vertically (`flex-col`) on mobile screens and align horizontally (`sm:flex-row`) starting at small (`sm`) viewports.

---

## 4. Flexbox & CSS Grid

### Flexbox Usage
Flexbox is used primarily for one-dimensional layouts, navigation bars, button groupings, and component alignment.

Example utility combination:
```html
class="flex items-center justify-between"
```
This ensures header elements, icons, and text maintain consistent horizontal alignment and spacing across all devices.

### CSS Grid Usage
CSS Grid is applied to two-dimensional structured layouts such as feature cards, pricing tables, and testimonial sections.

Example utility combination:
```html
class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"
```
This configuration allows cards to reflow automatically:
- **Mobile:** 1 column
- **Tablet:** 2 columns
- **Desktop:** 3 columns

---

## 5. User Experience & Testing

Responsive design enhances overall user experience (UX) by eliminating the need for horizontal scrolling or manual zooming on handheld devices.

### Testing Strategy
The final landing page was systematically verified using browser developer tools across multiple standardized screen dimensions:
- **Mobile Viewports:** 375px – 430px (iPhone / Android handhelds)
- **Tablet Viewports:** 768px – 820px (iPad / Tablet devices)
- **Desktop Viewports:** 1024px, 1440px, and 1920px (Laptops / Desktop monitors)