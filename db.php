<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "thangamayil";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['name'])) {
        echo "Name is required";
        exit;
    }
    $name = $_POST['name'];

    if (empty($_POST['email'])) {
        echo "Email is required";
        exit;
    }
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    if (empty($_POST['password'])) {
        echo "Password is required";
        exit;
    }
    $password = $_POST['password'];

    if (strlen($password) < 8) {
        "Password must be at least 8 characters long";
        exit;
    }
    if (!preg_match("#[0-9]+#", $password)) {
        echo "Password must include at least one number";
        exit;
    }
    if (!preg_match("#[a-zA-Z]+#", $password)) {
        echo "Password must include at least one letter";
        exit;
    }

    if (empty($_POST['confirm_password'])) {
        echo "Confirm Password is required";
        exit;
    }
    $confirm = $_POST['confirm_password'];

    if ($password != $confirm) {
        echo "Passwords do not match";
        exit;
    }

    $sql = "INSERT INTO `customer_info` (Name, Email, Password, Cpassword) VALUES ('$name', '$email', '$password', '$confirm')";

    if ($conn->query($sql) === TRUE) {
        echo "Account created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
