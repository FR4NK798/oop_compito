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

echo '<a href="/oop_compito/aggiungi.php" class="btn btn-primary">Aggiungi</a>';



foreach ($stmt as $row) {
    $newArrUserDb[] = $row;
    // echo '<pre>';
    // print_r($row);
    // echo '</pre>';
    echo '<div class="card" style="width: 18rem;">';
    echo '<img src="' . $row['immagine'] . '" class="card-img-top object-fit-contain" height="230rem" alt="...">';

    echo '<div class="card-body">';

    echo '<h5 class="card-title">' . $row['nome'] . '</h5>';
    echo '<p class="card-text">' . $row['descrizione'] . '</p>';
    echo '<div class="card-text">' . $row['prezzo'] . '</div>';
    echo '<a href="/oop_compito/elimina.php?id=' . $row['id'] . ' " class="btn btn-danger">Elimina</a>';
    echo '<a href="/oop_compito/modifica.php?id=' . $row['id'] . ' " class="btn btn-danger">Modifica</a>';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>

