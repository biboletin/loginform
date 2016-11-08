<?php
    include 'user.class.php';

$user = new User();
$username = $user->username = $_POST['username'];
$password = $user->password = md5($_POST['password']);
$user->checkUser($username, $password);
?>
