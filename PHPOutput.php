<?php

if (isset($_POST['submit'])) {
    $LLFirstName = $_POST['firstName'];

$LLLastName = $_POST['lastName'];
$LLStudentID = $_POST['studentID'];
$LLGender = $_POST['gender'];
$LLBirthday = $_POST['birthday'];
$LLCourse = $_POST['course'];
$LLYrLevel = $_POST['yrLevel'];
$LLEmail = $_POST['email'];
$LLContact = $_POST['contact'];
$LLAddInfo = $_POST['addInfo'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <?php
    echo "<p class='display-4 text-center mt-5 text-warning'>Student Registration Result</p>";
    echo "<p class='lead text-center'>Thank you for registering. Here's your summary details:</p>";
    echo "<p class='lead mx-5 px-5'><strong>First Name:</strong> " . $LLFirstName . "</p>";
    echo "<p class='lead mx-5 px-5'><strong>Last Name:</strong> " . $LLLastName . "</p>";
    echo "<p class='lead mx-5 px-5'><strong>Student ID:</strong> " . $LLStudentID . "</p>";
    echo "<p class='lead mx-5 px-5'><strong>Gender:</strong> " . $LLGender . "</p>";
    echo "<p class='lead mx-5 px-5'><strong>Birthday:</strong> " . $LLBirthday . "</p>";
    echo "<p class='lead mx-5 px-5'><strong>Course:</strong> " . $LLCourse . "</p>";
    echo "<p class='lead mx-5 px-5'><strong>Year Level:</strong> " . $LLYrLevel . "</p>";
    echo "<p class='lead mx-5 px-5'><strong>Email:</strong> " . $LLEmail . "</p>";
    echo "<p class='lead mx-5 px-5'><strong>Contact Number:</strong> " . $LLContact . "</p>";
    echo "<p class='lead mx-5 px-5'><strong>Additional Information:</strong> " . $LLAddInfo . "</p>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>