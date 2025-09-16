# Run this project with XAMPP

Project root: `Final Assignment_`

## 1) Database

- Start Apache and MySQL in XAMPP.
- Import or run the schema: open phpMyAdmin → SQL → paste the contents of `sql/schema.sql` → Run.
- This creates database `jannetd` with utf8mb4.

## 2) DB connection

- Central connection lives in `sql/db.php` (host: 127.0.0.1, user: root, password: empty, db: jannetd).
- Global bootstrap `includes/bootstrap.php` starts sessions and requires the DB.

In PHP pages include either of these:

```php
require_once __DIR__ . '/includes/bootstrap.php';
```

If the file is in a subfolder:

```php
require_once __DIR__ . '/../includes/bootstrap.php';
```

You can then use `$mysqli` or `db_query($sql, $params, $types)`.

## 3) Test the DB connection

Open in your browser:

- `http://localhost/ABI/Final%20Assignment/Final%20Assignment_/test-db.php`

You should see "DB connection OK".

## 4) Start page

- We created `index.php` (same content as your HTML) and added the bootstrap include so PHP runs.
- `.htaccess` sets DirectoryIndex to prefer `index.php`.

Visit:

- `http://localhost/ABI/Final%20Assignment/Final%20Assignment_/` → should load index.php

## 5) Images

- Moved product images to `assets/img`. Update new images as `assets/img/<name>`.

## 6) Next suggested steps

- Consider moving CSS to `assets/css/style.css` and update `<link>`.  
- Normalize file names (no spaces, lowercase) to avoid path issues.
- Convert other pages to `.php` as you add server logic.
