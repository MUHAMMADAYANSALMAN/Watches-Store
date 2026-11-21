
# WatchesError — PHP/MySQL Luxury Watch Store

## Stack
PHP 8+, MySQL, PDO, Bootstrap 5, vanilla JavaScript, Composer / PhpSpreadsheet.

## Setup (XAMPP)
1. Copy the `WatchesError` folder into `C:\xampp\htdocs\`.
2. Start Apache and MySQL in XAMPP.
3. Open phpMyAdmin and import `database/schema.sql`.
4. Edit `config/config.php` if your MySQL username/password differs.
5. Visit `http://localhost/WatchesError/`.
6. Install Excel dependency from this folder in a terminal:
   `composer require phpoffice/phpspreadsheet`
7. Create the first admin by visiting:
   `http://localhost/WatchesError/setup_admin.php`
   Set the username/password, then DELETE `setup_admin.php` after setup.

## Included
- Long responsive storefront with light default theme and four theme choices.
- Database-backed product catalogue, product detail, session cart, checkout and order tracking.
- Admin login, product CRUD, order status updates, inventory overview and XLSX exports.
- PDO prepared statements, password hashing, CSRF tokens, validation and transactional checkout.

## Important notes
- Online payment is intentionally not enabled. Checkout offers Cash on Delivery only until a real payment provider is configured.
- Product photography currently uses remote Unsplash image URLs as demo catalogue imagery. Replace these with your own licensed product photos in the admin.
- This is a functional starter implementation. Before public deployment, configure HTTPS, secure database credentials, email notifications, backups, rate limiting, and production-grade upload/storage policies.
