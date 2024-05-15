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
    echo '<div class="card" style="width: 18rem;">';
    echo '<img src="' . $row['immagine'] . '" class="card-img-top" height="230rem" alt="...">';

    echo '<div class="card-body">';

    echo '<h5 class="card-title">' . $row['nome'] . '</h5>';
    echo '<p class="card-text">' . $row['descrizione'] . '</p>';
    echo '<div class="card-text">' . $row['prezzo'] . '</div>';
    echo '<a href="/oop_compito/elimina.php?id=' . $row['id'] . ' class="btn btn-primary">Elimina</a>';
    echo '</div>';
    echo '</div>';
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