# Project Structure

```
kit-bgita/
├── index.html                       # Main entry point (static HTML)
├── data.js                          # Site data — events and graduates arrays
├── css/
│   └── style.css                    # Complete design system (CSS custom properties, components)
├── js/
│   └── main.js                      # Vanilla JS — timeline, carousel, modal, scroll spy
├── images/                          # Static assets — .webp preferred, .jpg/.png fallbacks
│   ├── logo.svg
│   ├── diplom_red.png / diplom_blue.png   # Diploma icons
│   ├── {year}.png / {year}.webp           # Graduation class photos (carousel)
│   └── {name}.jpg / {name}.webp           # Portrait photos
└── .kiro/
    └── steering/                    # Kiro steering files
```

## Conventions

- **Static site architecture:** No server-side rendering — all content loaded from `data.js`
- **CSS uses custom properties:** Colors, fonts, spacing defined in `:root` for easy theming
- **Vanilla JavaScript:** No frameworks or libraries; ES5+ compatible IIFE pattern
- **Images:** Always provide `.webp` version alongside `.jpg`/`.png` fallbacks using `<picture>` element
- **All user-facing text is in Russian** (UTF-8). Keep it that way.
- **No build step:** Edit files directly and deploy

## Data Structure

The `data.js` file exports a global `data` object:

```js
var data = {
  events: [
    { year: 2012, title: "...", text: "...", poster: "...", action: "graduates" }
  ],
  graduates: [
    { year: 2012, name: "...", thesis: "...", is_red: "1", vk_id: "..." }
  ]
};
```

## CSS Architecture

- `:root` — CSS custom properties (colors, fonts, shadows, radii)
- `.site-nav` — Fixed navigation with blur backdrop
- `.hero` / `.carousel` — Hero section with image carousel
- `.timeline-layout` — Grid layout with sticky sidebar
- `.event-card` — Card components for events
- `.modal-backdrop` / `.modal-box` — Modal for graduate lists
- `.site-footer` — Footer with social links
