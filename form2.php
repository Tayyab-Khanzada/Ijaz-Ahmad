<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $firstname = $_POST["fname"];
        $middlename = $_POST["mname"];
        $lastname = $_POST["ename"];
        $course = $_POST["course"];
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
        $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
        $currentAddress = isset($_POST["current"]) ? $_POST["current"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $password = isset($_POST["pass"]) ? $_POST["pass"] : "";
        $repassword = isset($_POST["repass"]) ? $_POST["repass"] : "";

        echo "<h1>Form Submission Result</h1>";
        echo "<p>Firstname: $firstname</p>";
        echo "<p>Middlename: $middlename</p>";
        echo "<p>Lastname: $lastname</p>";
        echo "<p>Course: $course</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Current Address: $currentAddress</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Password: $password</p>";
        echo "<p>Re-typed Password: $repassword</p>";
    } else {
        echo "<h1>Error: This page cannot be accessed directly.</h1>";
    }
    ?>
</body></html>
