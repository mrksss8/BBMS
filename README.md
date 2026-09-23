<h1 align="center">Welcome to Barangay Bayog Management System 👋</h1>
<p>
</p>

> This system is made by PUPCC BSIT as their Capstone Project 

## 🚀 Prerequisites

To run this project locally, you must use the following environment setup:

*   **Laragon** (Recommended local development environment for Windows)
*   **PHP 7.4** (or any stable PHP 7.x version)
*   **Composer** (Compatible with PHP 7)
*   **MySQL** (Included with Laragon)
*   **Node.js & NPM**

---

## 🛠️ Installation & Setup Steps

Follow these steps step-by-step to set up the project locally using Laragon:

### 1. Place Project in Laragon Root
Clone the repository directly into your Laragon `www` directory (usually located at `C:\laragon\www\`):
```bash
cd C:\laragon\www
git clone https://github.com/mrksss8/BBMS.git
cd BBMS
```

### 2. Configure Laragon to PHP 7
Before installing dependencies, ensure Laragon is using the correct PHP version:
1. Open the **Laragon** UI.
2. Right-click anywhere in the interface.
3. Navigate to **Menu > PHP > Version** and select **PHP 7.x** (e.g., PHP 7.4).
4. Click **Start All** to spin up MySQL (you will only need Laragon's database service).

### 3. Install Dependencies
Open your terminal inside the `BBMS` directory and run:
```bash
# Install PHP dependencies
composer update
composer install

# Install Frontend dependencies
npm install
```

### 4. Environment Configuration
Copy the template environment file to create your own configuration file:
```bash
cp .env.example .env
```

Open the newly created `.env` file and update your database credentials to match Laragon's default settings:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bbms_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Create Database
Before running database commands, you need to create the empty schema:
1. In the **Laragon** UI, click the **Database** button (or open HeidiSQL/phpMyAdmin).
2. Connect to your local session using the username `root` and a blank password.
3. Right-click your root connection and select **Create new > Database** (or run the SQL query below).
4. Name the database exactly: **`bbms_db`**

```sql
CREATE DATABASE bbms_db;
```

### 6. Generate Application Key
Generate a secure encryption key for your application:
```bash
php artisan key:generate
```

### 7. Run Database Migrations and Seeding
Create the database tables and populate them with initial or dummy data:
```bash
php artisan migrate --seed
```

### 8. Compile Assets
Build the frontend stylesheets and JavaScript assets:
```bash
npm run dev
```

### 9. Start the Local Server
Launch Laravel's built-in development server:
```bash
php artisan serve
```

Your system will now be live and accessible at **`http://127.0.0.1:8000`**.

---

## 📌 Features

*   **Resident Profiling:** Record and update detailed profiles of Barangay Bayog residents.
*   **Certificate & Clearance Issuance:** Manage requests for Barangay Clearance, Indigency, and Residency certificates.
*   **Blotter & Incident Reports:** Document and track local community disputes and resolutions.


---

## 📄 License


## Author

👤 **Mark Anthony Bautista**

* Github: [@mrksss8](https://github.com/mrksss8)

## Show your support

Give a ⭐️ if this project helped you!

***
_This README was generated with ❤️ by [readme-md-generator](https://github.com/kefranabg/readme-md-generator)_
