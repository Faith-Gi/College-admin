<?php
// Include database connection
include 'db.php';
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $name = $_POST['name'];
 $id_number = $_POST['id_number'];
 $gender = $_POST['gender'];
 $age = $_POST['age'];
 $course = $_POST['course'];
 // Insert student data into the database
 $sql = "INSERT INTO students (name, id_number, gender, age, course) 
 VALUES ('$name', '$id_number', '$gender', '$age', '$course')";
 if ($conn->query($sql) === TRUE) {
 echo "New student record created successfully";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 // Close the connection
 $conn->close();
}
?>
