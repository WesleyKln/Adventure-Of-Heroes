<?php

$pdo = new PDO('mysql:host=localhost; dbname=RogueLike; charset=utf8', 'Wes', '19851985');
$stmt = $pdo->prepare('SELECT name FROM users WHERE id=1');

$stmt->execute();
$lastBoss = $stmt->fetch(PDO::FETCH_ASSOC)['name'];
