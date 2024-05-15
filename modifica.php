<?php

if (isset($_COOKIE['consentito'])) {

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

    $myId = $_GET["id"];

    $stmt = $pdo->prepare('SELECT * FROM cards WHERE id = ?');
    $stmt->execute([$myId]);
    $row = $stmt->fetch();



    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Ottenere i dati dal form
        $nome = $_POST['nome'];
        $descrizione = $_POST['descrizione'];
        $prezzo = $_POST['prezzo'];
        $immagine = $_POST['immagine'];

        $stmt = $pdo->prepare("UPDATE cards SET nome = :nome, descrizione = :descrizione, prezzo = :prezzo, immagine = :immagine WHERE id = $myId");
        $stmt->execute([
            'nome' => $nome,
            'descrizione' => $descrizione,
            'prezzo' => $prezzo,
            'immagine' => $immagine,

        ]);
        header('Location: /oop_compito/cards.php');
    }

?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">




    <h1 class="fs-1">Aggiungi prodotto
    </h1>
    <div class="container">

        <form action="" method="POST" novalidate>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $row['nome'] ?>">
            </div>
            <div class="mb-3">
                <label for="descrizione" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="descrizione" name="descrizione" value="<?= $row['descrizione'] ?>">
            </div>
            <div class="mb-3">
                <label for="prezzo" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="prezzo" name="prezzo" value="<?= $row['prezzo'] ?>">
            </div>
            <div class="mb-3">
                <label for="immagine" class="form-label">Immagine URL</label>
                <input type="text" class="form-control" id="immagine" name="immagine" value="<?= $row['immagine'] ?>">
            </div>
            <button type="submit" class="btn btn-success mt-5">Modifica</button>
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php
} else {
    header("Location: /oop_compito/index.php");
}
?>