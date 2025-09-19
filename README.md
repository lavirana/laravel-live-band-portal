# 🎶 Laravel Live Band Portal

A lightweight **Laravel 10** project for live bands to interact with their audience.  
This portal allows users to **submit song requests**, **give feedback**, and view an **admin list of recent requests**.  

---

## ✨ Features
- ✅ Submit Song Requests (saved in database)  
- ✅ Give Feedback (displayed on a feedback page)  
- ✅ View Song Requests with feedback count  
- ✅ Simple Admin Dashboard for recent requests  

---

## 🛠️ Tech Stack
- **Laravel 10**  
- **PHP 8.2+**  
- **MySQL / MariaDB**  
- **Tailwind CSS** (for UI styling)

---

## 🚀 Installation Guide


1. Clone the repository
   git clone https://github.com/lavirana/laravel-live-band-portal.git
   cd laravel-live-band-portal

2. Install dependencies
composer install
npm install && npm run dev

3. Set up .env file
cp .env.example .env
php artisan key:generate

4. Run migrations and seeders
php artisan migrate --seed

5. Start development server
php artisan serve

6. Visit the app at:
http://127.0.0.1:8000

## Screenshots