 🧾 **Project Name:** Employee Management System

### 🔧 Tech Stack: PHP, MySQL (via phpMyAdmin), XAMPP, HTML, CSS

---

## 📘 **Project Description:**

The **Employee Management System** is a lightweight, powerful, and modern web-based application developed using PHP and MySQL, designed to allow an admin to manage employee data efficiently. The system provides a user-friendly interface with a secure login, CRUD operations (Create, Read, Update, Delete) for employee records, and stylish UI for a rich user experience.

---

## ✨ **Features:**

### 🔐 Admin Login:

* Secure admin login using email and hashed password.
* Prevents unauthorized access.

### 👤 Employee Management:

* Add new employees (Name, Email, Position, Salary).
* View all employees in a styled table format.
* Edit existing employee details.
* Delete employee records with confirmation.

### 🎨 Modern UI:

* Stylish login and dashboard.
* Responsive layout using custom CSS.
* User-friendly interface with rich buttons and feedback.

---

## 🧰 **Database: `employee_db`**

You will create two tables:

1. `admin` — for login.
2. `employee` — for employee data.

---

## 💾 **SQL Commands to Create Database & Tables**

### ✅ Run this in phpMyAdmin (SQL tab):

```sql
-- Create database
CREATE DATABASE IF NOT EXISTS employee_db;
USE employee_db;

-- Create admin table
CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Insert default admin (email: admin@example.com, password: admin123)
INSERT INTO admin (email, password) VALUES (
    'admin@example.com',
    '$2y$10$UlZG2bpGmIh8aSkxSKCJCeZNU0Kdjbr82rT8JJ4kpz5BIm2Up3N/S'
);

-- Create employee table
CREATE TABLE IF NOT EXISTS employee (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    position VARCHAR(100) NOT NULL,
    salary DECIMAL(10,2) NOT NULL
);
```

---

## 🔑 **Login Credentials:**

* **Email:** `admin@example.com`
* **Password:** `admin123` (bcrypt hashed in database)

---

## 🌍 **To Run the Project in Browser:**

1. Place your project folder inside:

   ```
   D:\xampp\htdocs\employee-management
   ```

2. Start **Apache** and **MySQL** from XAMPP.

3. Open Chrome and go to:

   ```
   http://localhost/employee-management/

