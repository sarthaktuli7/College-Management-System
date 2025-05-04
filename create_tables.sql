CREATE TABLE Department (
    department_id INT PRIMARY KEY,
    name TEXT NOT NULL
);

CREATE TABLE Student (
    student_id INT PRIMARY KEY,
    name TEXT NOT NULL,
    email TEXT UNIQUE NOT NULL,
    department_id INT,
    admission_year INT,
    FOREIGN KEY (department_id) REFERENCES Department(department_id)
);

CREATE TABLE Professor (
    professor_id INT PRIMARY KEY,
    name TEXT NOT NULL,
    email TEXT UNIQUE NOT NULL,
    department_id INT,
    FOREIGN KEY (department_id) REFERENCES Department(department_id)
);

CREATE TABLE Course (
    course_id INT PRIMARY KEY,
    title TEXT NOT NULL,
    credits INT NOT NULL,
    department_id INT,
    FOREIGN KEY (department_id) REFERENCES Department(department_id)
);

CREATE TABLE Term (
    term_id INT PRIMARY KEY,
    name TEXT NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL
);

CREATE TABLE Enrollment (
    student_id INT,
    course_id INT,
    term_id INT,
    enroll_date DATE,
    PRIMARY KEY (student_id, course_id, term_id),
    FOREIGN KEY (student_id) REFERENCES Student(student_id),
    FOREIGN KEY (course_id) REFERENCES Course(course_id),
    FOREIGN KEY (term_id) REFERENCES Term(term_id)
);

CREATE TABLE Room (
    room_id INT PRIMARY KEY,
    building TEXT NOT NULL,
    capacity INT NOT NULL
);

CREATE TABLE TimeSlot (
    timeslot_id INT PRIMARY KEY,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL
);

create table classschedule(
schedule_id INT PRIMARY KEY,
    course_id INT,
    professor_id INT,
    term_id INT,
    room_id INT,
    timeslot_id INT,
    day_of_week TEXT NOT NULL,
    FOREIGN KEY (course_id) REFERENCES Course(course_id),
    FOREIGN KEY (professor_id) REFERENCES Professor(professor_id),
    FOREIGN KEY (term_id) REFERENCES Term(term_id),
    FOREIGN KEY (room_id) REFERENCES Room(room_id),
    FOREIGN KEY (timeslot_id) REFERENCES TimeSlot(timeslot_id)
);

CREATE TABLE Grade (
    student_id INT,
    course_id INT,
    term_id INT,
    grade CHAR(2),
    PRIMARY KEY (student_id, course_id, term_id),
    FOREIGN KEY (student_id) REFERENCES Student(student_id),
    FOREIGN KEY (course_id) REFERENCES Course(course_id),
    FOREIGN KEY (term_id) REFERENCES Term(term_id)
);

CREATE TABLE professor_course (
    pc_id INT PRIMARY KEY,
    professor_id INT,
    course_id INT,
    term_id INT,
    FOREIGN KEY (professor_id) REFERENCES professor(professor_id),
    FOREIGN KEY (course_id) REFERENCES course(course_id),
    FOREIGN KEY (term_id) REFERENCES term(term_id)
);

CREATE TABLE course_completion (
    completion_id INT PRIMARY KEY,
    student_id INT NOT NULL,
    course_id INT NOT NULL,
    completion_date DATE NOT NULL,
    grade VARCHAR(2),
    FOREIGN KEY (student_id) REFERENCES Student(student_id),
    FOREIGN KEY (course_id) REFERENCES Course(course_id)
);

