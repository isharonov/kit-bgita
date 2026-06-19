# Tech Stack

## Frontend (Static Site)
- **Type:** Pure static HTML/CSS/JS — no backend rendering
- **Entry point:** `index.html` in project root
- **Data:** `data.js` — inline JavaScript object with `events` and `graduates` arrays

### CSS
- **Framework:** None — custom CSS with CSS custom properties
- **File:** `css/style.css` — modern design system with warm archival aesthetic
- **Color scheme:** Light cream background (`#faf8f5`), amber accent (`#b8860b`)
- **Responsive:** Mobile-first with CSS Grid and Flexbox

### JavaScript
- **Framework:** None — vanilla ES5+ in IIFE pattern
- **File:** `js/main.js` — handles timeline rendering, carousel, modals, scroll spy
- **No dependencies:** No jQuery, no external libraries

### Fonts (Google Fonts)
- **Display:** Cormorant Garamond (serif) — headings, year numbers
- **Body:** DM Sans (sans-serif) — body text, navigation, UI elements

### Images
- **Location:** `images/`
- **Format:** `.webp` preferred with `.jpg`/`.png` fallbacks via `<picture>` element
- **Notable assets:** `logo.svg`, `diplom_red.png`, `diplom_blue.png`, graduation photos (`{year}.png`)

## Deployment
- **No build step:** Deploy files directly to any static host
- **No package manager:** No `package.json`, no npm/yarn dependencies
- **Server:** Any static file server (Apache, Nginx, GitHub Pages, Netlify, etc.)

## Common Tasks

| Task | How |
|---|---|
| Run locally | Open `index.html` in browser, or use a local server (`python -m http.server`) |
| Update data | Edit `data.js` — modify `data.events` or `data.graduates` arrays |
| Change colors | Edit CSS custom properties in `:root` at top of `css/style.css` |
| Add images | Place in `images/`, provide both `.webp` and fallback formats |
