<?php
session_start();
// Check if the admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
 header("Location: index.php");
 exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin Dashboard</title>
 <link rel="stylesheet" href="styles.css">
</head>
<body>
 <div class="dashboard-container">
 <h2>Admin Dashboard - Add Student</h2>
 <form action="insert_student.php" method="POST">
 <label for="name">Name:</label>
 <input type="text" id="name" name="name" required><br><br>
 <label for="id_number">ID Number:</label>
 <input type="number" id="id_number" name="id_number" required><br><br>
 <label for="gender">Gender:</label>
 <select id="gender" name="gender" required>
 <option value="Male">Male</option>
 <option value="Female">Female</option>
 </select><br><br>
 <label for="age">Age:</label>
 <input type="number" id="age" name="age" required><br><br>
 <label for="course">Course Selected:</label>
 <input type="text" id="course" name="course" required><br><br>
 <input type="submit" value="Submit">
 </form>
 </div>
</body>
</html>