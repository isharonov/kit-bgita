# Project Structure

```
kit-bgita/
├── index.php                        # CI bootstrap / entry point
├── .htaccess                        # (root-level, if present)
├── css/
│   └── style.css                    # Custom styles (Bootstrap overrides, responsive columns)
├── images/                          # Static assets — .webp preferred, .jpg/.png fallbacks
│   ├── logo.svg
│   ├── bg2.png
│   ├── diplom_red.png / diplom_blue.png
│   ├── {year}.png / {year}.webp     # Graduation class photos (carousel)
│   └── {name}.jpg / {name}.webp     # Portrait photos
├── application/
│   ├── config/
│   │   ├── config.php               # Base URL, charset, hooks, sessions
│   │   ├── database.php             # DB connection (mysqli, db: kit)
│   │   ├── routes.php               # Default controller: History
│   │   ├── autoload.php             # Nothing autoloaded globally
│   │   └── hooks.php                # Registers compress hook
│   ├── controllers/
│   │   └── History.php              # Only controller; loads model, passes data to views
│   ├── models/
│   │   └── Events_model.php         # Queries `events` and `graduates` tables
│   ├── views/
│   │   ├── header.php               # <!DOCTYPE>, Bootstrap CSS, navbar, carousel
│   │   ├── events.php               # Main content — year loop, cards, modals
│   │   ├── footer.php               # Bootstrap JS, footer nav
│   │   └── errors/                  # CI default error views (html + cli)
│   ├── hooks/
│   │   └── compress.php             # HTML whitespace minification (post_system)
│   ├── cache/                       # CI output cache (empty)
│   └── logs/                        # CI error logs (empty)
└── system/                          # CodeIgniter 3 core (do not modify)
```

## Conventions

- **Views are split into three partials:** `header.php` → `events.php` → `footer.php`. Every page load follows this sequence.
- **Data flows via `$this->data[]`** in the controller, passed as the second argument to `$this->load->view()`.
- **Models use raw SQL queries** (not the Query Builder), called directly via `$this->db->query()`. Keep this pattern consistent.
- **No autoloaded libraries or helpers** — load dependencies explicitly inside the controller or model constructor.
- **Database name is `kit`**; two tables: `events` and `graduates`.
- **Images should have a `.webp` version** alongside any `.jpg`/`.png` source file.
- **All user-facing text is in Russian** (UTF-8). Keep it that way.
- **The `system/` directory is the unmodified CI3 core** — never edit files there; use `application/core/` with `MY_` prefix for extensions.
- **Security:** Every PHP file begins with `defined('BASEPATH') OR exit('No direct script access allowed');`.
