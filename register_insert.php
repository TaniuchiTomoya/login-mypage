<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson1;localhost;", "root", "");

$stmt = $pdo->prepare("insert into login_mypage(name,mail,password,picture,comments)values(?,?,?,?,?)");


$stmt->bindValue(1,$_POST['name']);
$stmt->bindValue(1,$_POST['mail']);
$stmt->bindValue(1,$_POST['password']);
$stmt->bindValue(1,$_POST['path_filename']);
$stmt->bindValue(1,$_POST['comments']);

$stmt->execute();
$pdo = NULL;

header('Location:aftter_register.html');
?>