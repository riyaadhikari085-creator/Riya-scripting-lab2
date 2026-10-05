<?php
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "12345") {

        $_SESSION['username'] = $username;

        setcookie("username", $username, time() + 3600);

        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>

<form method="post">

    Username:
    <input type="text" name="username" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" name="login" value="Login">

</form>