<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Circle Area Calculator</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 50px;
        background-color: #f4f4f4;
    }
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label, input {
        display: block;
        margin-bottom: 10px;
    }
    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    input[type="submit"] {
        background-color: #28a745;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #218838;
    }
    .result {
        background-color: #fff;
        padding: 20px;
        margin-top: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .author-info {
        margin-top: 20px;
        text-align: center;
    }
</style>
</head>
<body>
<h1>Circle Area Calculator</h1>
<form method="POST" action="">
    <label for="radius">Enter radius:</label>
    <input type="text" id="radius" name="radius" placeholder="Radius" required>
    <input type="submit" name="submit" value="Calculate Area">
</form>
<?php
// Author: Syed Mirsab Rizvi
// Class: CPS*3320
// Date: May 23, 2024
// Description: This PHP script processes the form data, calls a Python script to calculate the area of a circle, and displays the result.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radius = escapeshellarg($_POST["radius"]);

    // Prepare the command to run the Python script
    $command = "python3 area.py $radius 2>&1";
    // Execute the Python script and capture the output
    $output = shell_exec($command);

    

    // Display the result
    if ($output === null) {
        echo "<div class='result'><h3>Error executing Python script.</h3></div>";
    } else {
        echo "<div class='result'><h3>Result from Python script:</h3>";
        echo "<p>$output</p></div>";
    }
}
?>
<div class="author-info">
    <p>Created by: Syed Mirsab Rizvi</p>
    <p>Class: CPS*3320</p>
    <p>Date: May 23, 2024</p>
</div>
</body>
</html>
