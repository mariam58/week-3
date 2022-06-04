<?php require_once 'connection_db.php'?>
<?php
$statement = $pdo->prepare('SELECT COUNT(*) FROM users');
$statement->execute();
$per_page = 2;
$entries = $statement->fetchColumn();
$total_pages = ceil($entries / $per_page);
$page_now = isset($_GET["page"]) ? $_GET["page"] : 1 ;
$x= ($page_now-1)*$per_page;
$y=$per_page;
$statement = $pdo->prepare("SELECT * FROM `users` ORDER BY `id` DESC LIMIT $x, $y");
$statement->execute();
$users = $statement->fetchAll();
?>