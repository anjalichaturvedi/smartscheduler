<!-- student_dashboard.php -->

<?php
// Check if the user is logged in; you may use session management or other authentication mechanisms
// For simplicity, this example assumes a session variable is set upon successful login

session_start();

if (!isset($_SESSION['student_id'])) {
    // Redirect to the login page if not logged in
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <!-- Include any necessary styles or scripts -->
</head>
<body>
    <!-- Add content for the student dashboard here -->
    <h1>Welcome to the Student Dashboard!</h1>
    <p>This is your personalized dashboard content.</p>
    
    <!-- Add any other content specific to the student dashboard -->

    <!-- Include footer or any other necessary elements -->
</body>
</html>
