# User-Status-Toggle
📋 Toggle Status Web App
A simple web-based application built with HTML, CSS, JavaScript, PHP, and MySQL that allows users to:

Submit their name and age via a form

Store data into a MySQL database

View all submitted users in a table

Toggle a user's status (between 0 and 1) in real-time

## 🚀 Features
🔘 One-line form: Submit name and age

🗂️ MySQL integration: All entries stored in a database table

📋 Dynamic display: View all records in a styled table

🔁 Toggle status: Change status from 0 to 1 or vice versa using a button

⚡ Instant update: Status is updated on the page without refreshing (AJAX)

## 🧱 Tech Stack
Frontend: HTML, CSS, JavaScript

Backend: PHP

Database: MySQL (via phpMyAdmin in XAMPP)

Environment: XAMPP (Apache + MySQL)

## 🏗️ Project Structure
pgsql
Copy
Edit
project-folder/
│
├── index.php       # Main UI with form + table
├── insert.php       # Handles form submission and inserts data into DB
├── fetch.php        # Displays all user records in a table
├── toggle.php       # Toggles user status via AJAX
├── README.md        # Project documentation
## 🗃️ Database Setup
Open phpMyAdmin (via http://localhost/phpmyadmin)

Run the following SQL:

sql
Copy
Edit
CREATE DATABASE IF NOT EXISTS toggle_app;
USE toggle_app;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  age INT NOT NULL,
  status TINYINT(1) DEFAULT 0
);

## 📌 How It Works
The form sends data to insert.php via POST.

insert.php inserts the data into the MySQL database.

index.html includes fetch.php to show all rows.

Each row has a Toggle button.

Clicking it triggers toggle.php using JavaScript Fetch API.

toggle.php updates the status in the database and reloads the updated table.


## 📽️ Demo
Watch the demo video here:

https://github.com/user-attachments/assets/91897808-9035-4505-b1c2-044146fe1b21

