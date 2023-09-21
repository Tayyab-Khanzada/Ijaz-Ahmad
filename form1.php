<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <link rel="stylesheet" href="backend.php">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $website = $_POST["website"];
        $comment = $_POST["comment"];
        $services = isset($_POST["Flight"]) ? "Flight " : "";
        $services .= isset($_POST["Hotel"]) ? "Hotel " : "";
        $services .= isset($_POST["Car"]) ? "Car" : "";
        $returningCustomer = isset($_POST["customer"]) ? ($_POST["customer"] === "Yes" ? "Yes" : "No") : "No";
        $continent = $_POST["Contry"];

        echo "<h1>Form Submission Result</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Website: $website</p>";
        echo "<p>Comment: $comment</p>";
        echo "<p>Services: $services</p>";
        echo "<p>Returning Customer: $returningCustomer</p>";
        echo "<p>Continent: $continent</p>";
    } else {
        echo "<h1>Error: This page cannot be accessed directly.</h1>";
    }
    ?></body></html>
