<?php
session_start();
include 'tp/bd.php';
$login = $_POST['login'];
$password = $_POST['password'];
$check_user = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
$res = $bd->query($check_user);
$user = mysqli_fetch_assoc($res);
$id_users = $user['id_users'];
$fio = $user['fio'];
$role = $user['role'];
mysqli_free_result($res);
if ($id_users) {
    $_SESSION['id_users'] = $id_users;
    $_SESSION['fio'] = $fio;
    $_SESSION['role'] = $role;
    header("Location: index.php");
} else {
    echo "Не верный логин или пароль";
    exit();
}