<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP to Python</title>
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
    label {
        display: block;
        margin-bottom: 8px;
    }
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
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
<h1>PHP to Python Sum Calculator</h1>
<form method="POST" action="">
    <label for="num1">Number 1:</label>
    <input type="text" id="num1" name="num1" required>
    <br>
    <label for="num2">Number 2:</label>
    <input type="text" id="num2" name="num2" required>
    <br>
    <input type="submit" name="submit" value="Calculate">
</form>
<?php
// Author: Syed Mirsab Rizvi
// Class: CPS*3320
// Date: May 23, 2024
// Description: This PHP script processes the form data, calls a Python script to calculate the sum of two numbers, and displays the result.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = escapeshellarg($_POST["num1"]);
    $num2 = escapeshellarg($_POST["num2"]);

    // Prepare the command to run the Python script
    $command = "python3 sum.py $num1 $num2";
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
