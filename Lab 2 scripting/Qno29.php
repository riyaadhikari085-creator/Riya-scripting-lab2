<?php

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];

    $errors = [];

    // Username validation
    if (strlen($username) < 2) {
        $errors[] = "Username must contain at least 2 characters.";
    }

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    // Date validation
    $date = DateTime::createFromFormat('Y-m-d', $dob);

    if (!$date || $date->format('Y-m-d') != $dob) {
        $errors[] = "Invalid date of birth.";
    }

    // Phone validation
    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        $errors[] = "Phone number must contain 10 digits.";
    }

    if (empty($errors)) {

        echo "Registration successful!";

    } else {

        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

?>

<form method="post">

    Username:
    <input type="text" name="username" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    Date of Birth:
    <input type="date" name="dob" required>
    <br><br>

    Phone:
    <input type="text" name="phone" required>
    <br><br>

    <input type="submit" name="register" value="Register">

</form>