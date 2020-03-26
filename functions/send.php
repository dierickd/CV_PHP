<?php
session_start();
$postSecure = [];
$error = [];
foreach ($_POST as $key => $value) {
    $postSecure[$key] = trim($value);
}

if (empty($postSecure['name'])) {
    $error['name'] = 'Votre nom n\'est pas valide';
}
if (empty($postSecure['email']) || !filter_var($postSecure['email'], FILTER_VALIDATE_EMAIL)) {
    $error['email'] = 'Votre email n\'est pas valide';
}
if (empty($postSecure['message'])) {
    $error['message'] = 'Votre message n\'est pas valide';
}
if (empty($error)) {
    $_SESSION['mail'] = $postSecure;
    header('Location: ../template/success.php');
}