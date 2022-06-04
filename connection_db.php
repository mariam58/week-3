<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=week-2', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare('SELECT * FROM users ORDER BY id DESC');
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);
?>