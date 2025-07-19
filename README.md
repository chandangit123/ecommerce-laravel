# 🛒 Laravel E-Commerce Website

A full-featured **E-Commerce website** built with Laravel, inspired by furniture websites like **Nilkamal**. This project was developed as part of an internship assignment, showcasing capabilities like user authentication, product management, shopping cart, and order handling.

---

## 🚀 Features

- 🔐 User registration and login system
- 🛍️ Browse products (title, price, image, details)
- 🛒 Add to cart, update quantity, remove items
- ✅ Checkout and place order
- 📦 Admin dashboard with:
  - Product management (CRUD)
  - View all customer orders
- 🌐 Built using Laravel Blade templates
- 🔄 Session-based cart handling
- 🧾 Order storage with total calculations

---

## 🧰 Tech Stack

| Tech         | Use Case                          |
|--------------|-----------------------------------|
| Laravel      | PHP Web Framework                 |
| MySQL        | Database                          |
| Blade        | Laravel Templating Engine         |
| Composer     | Dependency Management             |
| Breeze       | Simple Auth Scaffolding           |
| HTML/CSS     | Frontend UI                       |
| VS Code      | Development Environment           |
| Git/GitHub   | Version Control                   |

---

## 🛠️ Installation

```bash
# Clone the repository
git clone https://github.com/your-username/ecommerce-laravel.git
cd ecommerce-laravel

# Install dependencies
composer install
npm install && npm run dev

# Create environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database in .env
DB_DATABASE=ecommerce_db
DB_USERNAME=root
DB_PASSWORD=your_password

# Run migrations
php artisan migrate

# Start the server
php artisan serve

🧪 Sample Admin Account
To make a user admin:

bash
Copy
Edit
php artisan tinker

>>> $user = App\Models\User::find(1);
>>> $user->is_admin = true;
>>> $user->save();


📂 Project Structure
mathematica
Copy
Edit
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── ProductController.php
│   │   │   ├── CartController.php
│   │   │   └── OrderController.php
│   ├── Models/
│       ├── Product.php
│       ├── Order.php
├── resources/
│   ├── views/
│   │   ├── home.blade.php
│   │   ├── cart/
│   │   ├── admin/
│   │   └── products/
├── routes/
│   └── web.php



🤝 Contributing
Fork the project

Create a feature branch: git checkout -b feature/your-feature

Commit changes: git commit -am "Add your feature"

Push to branch: git push origin feature/your-feature

Open a Pull Request

