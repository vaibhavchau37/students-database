# Student Management System (PHP & MySQL)

This is a simple **Student Management System** using **PHP** and **MySQL**.  
It allows you to **insert** student details into a database and **view** all student records.

---

## Features

- Insert new student details:
  - Name
  - Enrollment Number
  - Course
- View all students in a table
- Simple and easy-to-use interface

---

## Requirements

- XAMPP (or any PHP + MySQL server)
- Web browser
- Basic knowledge of PHP and MySQL

---

## Setup Instructions

1. **Clone the repository** or download the project files.
   
2. **Create a database** in `phpMyAdmin` named `students_db` (or change the database name in `db_connect.php`).

sql
CREATE DATABASE students_db;

# 3.Create the students table:

CREATE TABLE students (
    ID INT(11) AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(100) NOT NULL,
    ENROLLMENT_NO VARCHAR(50) NOT NULL,
    COURSE VARCHAR(100) NOT NULL
);


4.Configure database connection in db_connect.php:

$host = "localhost";
$user = "root";       // default XAMPP username
$password = "";       // default XAMPP password
$dbname = "students_db";


5.Start XAMPP and run Apache and MySQL.

6.Open your browser and go to:
7http://localhost/<your_project_folder>/insert_student.php


7.Insert student details and check the data by visiting:
http://localhost/<your_project_folder>/view_students.php

Project Structure
/project-folder
│
├─ db_connect.php      // Database connection file
├─ insert_student.php  // Form to add new students
├─ view_students.php   // Display all students
└─ README.md           // Project documentation



Author

Vaibhav Chaudhary
