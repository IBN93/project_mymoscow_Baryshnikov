<?php
include "db.php";
$postData = file_get_contents('php://input');
$postData = json_decode($postData, true);
$name = $postData['name'];
$email = $postData['email'];
$message = $postData['message'];
$reg = "/^[-._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$/i";
if (preg_match($reg, $email) == 1) {
    $query = "INSERT INTO messages (email, full_name, message, date_created) VALUES ('$email', '$name', '$message', NOW())";
    mysqli_query($link, $query);
    echo "<div class=\"ajax\">Ваше сообщение отправлено.</div>";
} else {
    echo "Проверьте корректность ввода e-mail";
}
