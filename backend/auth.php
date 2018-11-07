<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {
    header('Location: admin_page.php');
    exit;
}

include "db.php";
$email = $_POST['email'];
$password = $_POST['pass'];
$query = "SELECT * FROM admins WHERE login='$email' AND password='$password'";
$result = mysqli_query($link, $query);
$result = mysqli_fetch_assoc($result);
if ($result != NULL) {
    $_SESSION['id'] = $result['id'];
    $_SESSION['login'] = $result['login'];
    header('Location: admin_page.php');
    exit;
} else {
    header('Location: index.php?error=0');
    exit;
}