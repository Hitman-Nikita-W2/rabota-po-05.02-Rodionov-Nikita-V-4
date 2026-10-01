<?php
include 'tp/bd.php';
if (!empty($_POST))
{
    $login = $_POST['login'];
    $password = $_POST['password'];
    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO users (`login`, `password`, `fio`, `email`, `phone`, `role`)
    VALUES ('$login', '$password', '$fio', '$email', '$phone', 'klient')";
    $res = $bd->query($sql);
    header("Location: formavto.php");
}
?>