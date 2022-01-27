<?php
mb_internal_encoding("utf8");
session_start();

try{
    $pdo = new PDO("mysql:dbname = lesson1;host = localhost;","root","");
} catch(PDOException $e) {
    die("<p>申し訳ございません。現在サーバーが混み合っており1次的にアクセスができません。<br>しばらくしてから再度ログインをしてください。</p>
    <a href='http://localhost/login_mypage/login.php'>ログイン</a>"
    );
}

$stmt = $pdo->prepare("select * from login_mypage where mail = ? && password = ?");

$stmt->bindValue(1,$_POST["mail"]);
$stmt->bindValue(2,$_POST["password"]);

$stmt->execute();
$pdo = NULL;

while($row = $stmt->fetch()) {
    echo $row['mail'];
    echo $row['password'];
}

?>