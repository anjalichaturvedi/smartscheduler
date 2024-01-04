<?php
// Assuming you have validated the student credentials

session_start();

// Assuming $studentId is the unique identifier of the student (retrieve it from the database)
$_SESSION['student_id'] = $studentId;

// Redirect to the student dashboard upon successful login
header("Location: student_dashboard.php");
exit();
?>
