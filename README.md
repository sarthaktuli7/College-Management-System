# 🎓 College Management System – SQL Data Project

## 📌 Introduction
This project is a **relational SQL-based database** that models the academic ecosystem of a university or college. It supports **student management, faculty allocation, course scheduling**, and **strategic academic analytics**, simulating a real-world academic system.

---

## 🧾 Project Description
An end-to-end MySQL project that simulates a full-fledged **college management system**. It handles student enrollment, professor-course mapping, tuition payments, academic scheduling, course completion, and more. This system enables administrators to manage data efficiently and analyze trends in academics and operations.

---

## 🧱 Database Schema Overview

### 🔗 Tables Included

| Table Name         | Description |
|--------------------|-------------|
| `student`          | Student details like ID, name, department, etc. |
| `professor`        | Professor details and their departments |
| `course`           | Courses with credits, titles, department info |
| `term`             | Academic term info (Fall 2023, Spring 2024, etc.) |
| `enrollment`       | Tracks student enrollments per term |
| `professor_course` | Maps professors to courses in specific terms |
| `course_completion`| Records completed courses with grades |
| `grade`            | Grade point system (e.g., A=4.0, B=3.0, etc.) |
| `payment`          | Tuition and fee payment records |
| `department`       | Departments like CS, EE, ME, etc. |
| `room`             | Room/building information |
| `classschedule`    | Course schedule details including time and room |
| `timeslot`         | Time slot definitions for scheduling |

---

## 📚 Use Case Scenarios

### 👩‍🎓 Student-Centric Scenarios
- **Class Overlap Detection**  
  ➤ Detect students registered for overlapping classes in a term.

- **Course Load Monitoring**  
  ➤ Identify students taking excessive course loads (credits).

- **Dropout Risk Analysis**  
  ➤ Spot students with repeated withdrawals or low completion rates.

- **Department-wise Enrollment Trends**  
  ➤ Monitor department growth or decline over time.

- **Admission Forecasting**  
  ➤ Use historical data to predict incoming students.

---

### 👨‍🏫 Professor & Course Allocation
- **Underutilized Professors**  
  ➤ Find professors teaching low-enrollment courses.

- **Overbooked Professors**  
  ➤ Detect faculty teaching too many courses per term.

- **Course Cancellation Criteria**  
  ➤ Identify courses consistently under-enrolled.

- **Cross-Department Teaching**  
  ➤ List professors teaching outside their primary department.

- **Future Load Balancing**  
  ➤ Optimize teaching assignments based on projected enrollments.

---

### 📘 Course & Schedule Management
- **High-Demand Courses**  
  ➤ Identify courses needing more sections.

- **Prerequisite Chain Analysis**  
  ➤ Evaluate if students are blocked from progression.

- **Clashing Schedules**  
  ➤ Detect scheduling conflicts from `classschedule` table.

- **Average Credits Per Student**  
  ➤ Determine course load across the student body.

- **Course Completion Rates**  
  ➤ Analyze success rates in courses term-wise.

---

### 🏫 Operational & Strategic Analysis
- **Budget Optimization**  
  ➤ Restructure courses/faculty if admissions drop.

- **Campus Resource Load**  
  ➤ Track usage of rooms and buildings.

- **Student-Faculty Ratio Trends**  
  ➤ Analyze how the ratio evolves over terms.

- **International vs Domestic Enrollment**  
  ➤ Compare geographic enrollment trends.

- **Impact of New Policies or Majors**  
  ➤ Assess how new offerings affect enrollments.

---

## 📂 Project Structure

college_admin/
│
├── db.php                 # DB connection file

├── index.php              # Admin login

├── dashboard.php          # Dashboard after login

│

├── student.php            # View all students

├── add_student.php        # Add new student

├── edit_student.php       # Edit student info

├── delete_student.php     # Delete student

│

├── course.php             # View all courses

├── add_course.php         # Add new course

├── edit_course.php        # Edit course info

├── delete_course.php      # Delete course

│

├── enrollment.php         # View/manage enrollments

├── logout.php             # Admin logout

└── college_mang_sys.sql   # SQL dump file for DB setup


## 🖥️ Local Setup Instructions (Windows - XAMPP)

### ✅ Step 1: Install Prerequisites

- 📦 [Download XAMPP](https://www.apachefriends.org/index.html)
- 💻 [Optional: Download MySQL Workbench](https://dev.mysql.com/downloads/workbench/)

---

### ✅ Step 2: Clone or Download Project

- Place the project folder inside XAMPP’s `htdocs` directory:

```bash
C:\xampp\htdocs\college_admin

### ✅ Step 3: Start XAMPP
Open XAMPP Control Panel and start the following:

🟢 Apache

🟢 MySQL

### ✅ Step 4: Create Database
Option A: Using phpMyAdmin
Open your browser and go to: http://localhost/phpmyadmin

Click on New and create a database named:
college_mang_sys

Click Import tab

Upload the college_mang_sys.sql file provided in this project

Click Go to finish import



-- Paste the content from college_mang_sys.sql here
### ✅ Step 5: Configure Database Connection
Open the file db.php and make sure the connection matches your MySQL settings:

<?php
$conn = new mysqli("localhost", "root", "", "college_mang_sys");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
⚠️ Note: The default MySQL username in XAMPP is root with no password.

### ✅ Step 6: Run the Project
In your browser, visit:

http://localhost/college_admin/
You’ll see the login screen or dashboard.

