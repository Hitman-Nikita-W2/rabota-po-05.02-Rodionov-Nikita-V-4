<?php
session_start();
unset($_SESSION['id_users']);
unset($_SESSION['fio']);
unset($_SESSION['role']);
header("Location: index.php");
?>