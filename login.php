<?php
session_start();
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 // Admin credentials
 $admin_username = 'Admin';
 $admin_password = 'Web2class2024';
 // Get user input from form
 $username = $_POST['username'];
 $password = $_POST['password'];
 // Validate credentials
 if ($username === $admin_username && $password === $admin_password) {
 $_SESSION['admin_logged_in'] = true;
 header("Location: admin-dashboard.php");
 exit;
 } else {
 echo "<script>alert('Incorrect username or password!');</script>";
 header("Location: index.php");
 }
}
?>