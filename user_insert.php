<?php
include_once 'database.php';

$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="INSERT INTO users (email, pass) VALUES (?, ?)";

$stmt=$pdo->prepare($sql);
$stmt->execute([$email, $pass]);

header("Location: users.php");
?>