<?php

if (isset($_SESSION['access'])) {

$host = 'localhost';
$db   = 'oop_compito';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// comando che connette al database
$pdo = new PDO($dsn, $user, $pass, $options);

// SELECT DI TUTTE LE RIGHE
$stmt = $pdo->prepare('DELETE FROM cards WHERE id = ?');
$stmt->execute([$_GET["id"]]);

header("Location: /oop_compito/cards.php");


} else {
    header("Location: /oop_compito/index.php");
}
?>