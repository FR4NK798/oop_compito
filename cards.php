<?php

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

$stmt = $pdo->query('SELECT * FROM cards');
// echo 'fetch';
$newArrUserDb = [];



foreach ($stmt as $row) {
    $newArrUserDb[] = $row;
    // echo '<pre>';
    // print_r($row);
    // echo '</pre>';
    echo '<div>' . $row['nome'] . '</div>';
    echo '<div>' . $row['descrizione'] . '</div>';
    echo '<div>' . $row['prezzo'] . '</div>';
    echo '<img src="' . $row['immagine'] . '" alt="...">';
}

// echo '<pre>';
// print_r($newArrUserDb);
// echo '</pre>';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>