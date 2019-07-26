<?php

$pdo = new PDO('mysql:host=localhost; dbname=RogueLike; charset=utf8', 'Wes', '19851985');
$stmt = $pdo->prepare('SELECT * FROM users ORDER BY id DESC LIMIT 1');

$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
