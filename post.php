<?php
require_once 'db.php';
session_start();
$login = $_SESSION['login'];
$message = $_POST['text'];
$result = mysqli_query($db_con, "INSERT INTO messages(login, message) VALUES ('$login', '$message')");
header('Location: /index.php');