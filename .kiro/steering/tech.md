# Tech Stack

## Backend
- **Framework:** CodeIgniter 3 (PHP)
- **PHP pattern:** MVC — controllers in `application/controllers/`, models in `application/models/`, views in `application/views/`
- **Database:** MySQL via `mysqli` driver; database name `kit`; charset `utf8`
- **Entry point:** `index.php` in project root (standard CI bootstrap)

## Frontend
- **CSS framework:** Bootstrap 4.0.0 (loaded from MaxCDN)
- **JS:** jQuery 3.2.1 slim + Popper.js 1.12.9 + Bootstrap 4.0.0 JS (all from CDN)
- **Custom CSS:** `css/style.css` — minimal overrides, responsive column layout via media queries
- **Images:** `images/` — `.webp` preferred format, `.jpg`/`.png` fallbacks; SVG used for logo

## Server
- **Web server:** Apache with `mod_rewrite` (`.htaccess` present)
- **Output hook:** `application/hooks/compress.php` — strips whitespace from HTML output via a `post_system` hook
- **Hooks enabled:** `$config['enable_hooks'] = TRUE`

## Configuration
- `application/config/config.php` — base URL, charset UTF-8, sessions, hooks
- `application/config/database.php` — DB credentials (hostname `localhost`, db `kit`)
- `application/config/routes.php` — default controller is `History`
- `application/config/autoload.php` — nothing autoloaded globally; models/DB loaded per-controller

## Common Tasks

There is no build system, package manager, or compilation step. This is a traditional server-side PHP application deployed directly.

| Task | How |
|---|---|
| Run locally | Point Apache/WAMP/XAMPP at project root; ensure `kit` MySQL database exists |
| Change base URL | Edit `$config['base_url']` in `application/config/config.php` |
| Update DB credentials | Edit `$db['default']` in `application/config/database.php` |
| Add a route | Edit `application/config/routes.php` |
| Enable CI debug mode | Set `ENVIRONMENT` to something other than `'production'` |
