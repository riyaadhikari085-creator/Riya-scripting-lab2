CREATE DATABASE college_db;

USE college_db;

CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    duration VARCHAR(50),
    status VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    course_id INT,
    fee DECIMAL(10,2),
    rollno VARCHAR(50),
    phone VARCHAR(20),
    address VARCHAR(150),
    dob DATE,
    status VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (course_id) REFERENCES courses(id)
);
step 2
<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "college_db"
);

if (!$conn) {
    die("Database connection failed");
}

?>
step 3
<?php

include "db.php";

$title = "BCA";
$duration = "4 Years";
$status = "Active";

$sql = "INSERT INTO courses
        (title, duration, status)
        VALUES
        ('$title', '$duration', '$status')";

if (mysqli_query($conn, $sql)) {
    echo "Course inserted successfully";
} else {
    echo "Error";
}

?>
step 4
<?php

include "db.php";

$name = "Riya";
$course_id = 1;
$fee = 50000;
$rollno = "BCA01";
$phone = "9800000000";
$address = "Kathmandu";
$dob = "2005-01-15";
$status = "Active";

$sql = "INSERT INTO students
(name, course_id, fee, rollno, phone, address, dob, status)
VALUES
('$name', '$course_id', '$fee', '$rollno', '$phone', '$address', '$dob', '$status')";

if (mysqli_query($conn, $sql)) {
    echo "Student inserted successfully";
}

?>
step 5
<?php

include "db.php";

$sql = "SELECT students.*, courses.title
        FROM students
        JOIN courses ON students.course_id = courses.id";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {

    echo "ID: " . $row['id'] . "<br>";
    echo "Name: " . $row['name'] . "<br>";
    echo "Course: " . $row['title'] . "<br>";
    echo "Fee: " . $row['fee'] . "<br>";
    echo "Roll No: " . $row['rollno'] . "<br>";
    echo "Phone: " . $row['phone'] . "<br>";
    echo "Address: " . $row['address'] . "<br>";
    echo "Status: " . $row['status'] . "<br>";
    echo "<hr>";
}

?>
step 6
<?php

include "db.php";

$id = 1;

$sql = "UPDATE students
        SET name='Riya',
            fee=55000,
            address='Lalitpur',
            status='Active'
        WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Student updated successfully";
}

?>
Step 7
<?php

include "db.php";

$id = 1;

$sql = "DELETE FROM students WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Student deleted successfully";
}

?>