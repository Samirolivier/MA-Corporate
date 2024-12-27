<?php
include 'config/config.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("UPDATE reviews SET status = 'rejected' WHERE id = ?");
$stmt->execute([$id]);

header('Location: dashboard.php');
?>
