# 🎓 College Management System – SQL Data Project

## 📌 Introduction
This project is a **relational SQL-based database** that models the academic ecosystem of a university or college. It supports **student management, faculty allocation, course scheduling**, and **strategic academic analytics**, simulating a real-world academic system like Syracuse University.

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

```plaintext
college_mang_sys/
│
├── create_tables.sql             # SQL for table creation
├── insert_data.sql               # Insert statements for dummy data
├── course_completion.sql         # Data for course completion analysis
├── analysis_queries.sql          # Advanced analytical SQL queries
├── ER_diagram.png                # Entity Relationship Diagram
├── screenshots/                  # Optional query result images
└── README.md                     # Project documentation
