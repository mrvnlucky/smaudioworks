<?php
session_start();

// initializing variables
$email = "";
$password = "";

require('config.php');

if (isset($_POST['signup-submit'])) {
    // posting all input in form
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    // form validation if not empty
    // array_push for adding corresponding error message unto $errors
    if (empty($name)) {
        array_push($errors, "Name is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (empty($phone)) {
        array_push($errors, "Phone is required");
    }

    // check for existing email addresses
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    // if email exists
    if ($user) {
        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    // if pass all error checks, register user
    if (count($errors) == 0) {
        // encrypts password
        $password = md5($password);

        $query = "INSERT INTO users (name, email, password, phone) VALUES ('$name', '$email', '$password', '$phone')";
        mysqli_query($db, $query);
        $_SESSION['email'] =  $email;
        $_SESSION['sucess'] = "You are now logged in";
        header('Location: index.php');
    }
}
