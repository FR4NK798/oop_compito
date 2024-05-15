<?php
class User
{
    public $nomeUtente;
    public $password;

    function __construct($nomeUtente, $password)
    {
        $this->nomeUtente = $nomeUtente;
        $this->password = $password;
    }

    function getNomeUtente()
    {
        return $this->nomeUtente;
    }

    function getPassword()
    {
        return $this->password;
    }

    function setNomeUtente($nomeUtente)
    {
        $this->nomeUtente = $nomeUtente;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <h1 class="fs-1">Login</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <form style="width: 500px" action="" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nome utente</label>
                        <input type="text" class="form-control" name="username" id="username" required />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div>    <?php

// echo '$_post';
// echo '<pre>';
// print_r($_POST);

if (!isset($_POST["username"])) {
    // echo 'non settato get';
} else {
    // echo 'utente settato';
    // echo '<br>';
    session_start();
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["password"] = $_POST['password'];

    // echo '$_SESSION';
    // echo '</pre>';
    // print_r($_SESSION);
    // echo '<pre>';

    $newUser = new User($_SESSION["username"], $_SESSION["password"]);

    // echo 'info utente';
    // echo '<pre>';
    // print_r($newUser);
    // echo '</pre>';

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

    $pdo = new PDO($dsn, $user, $pass, $options);

    // SELECT DI TUTTE LE RIGHE
    $stmt = $pdo->query('SELECT * FROM user_consentiti');
    // echo 'fetch';
    $newArrUserDb = [];

    foreach ($stmt as $row) {
        $newArrUserDb[] = $row;
    }

    // echo 'fetch ARRAY';
    // echo '<pre>' . print_r($newArrUserDb, true) . '</pre>';

    for ($x = 0; $x <= count($newArrUserDb); $x++) {
        if ($newArrUserDb[$x]['nomeUtente'] === $_SESSION["username"] && $newArrUserDb[$x]['password'] === $_SESSION["password"]) {
            $_SESSION["access"] = 'OK';
            echo 'ACCESSO ACCONSENTITO';
            header("Location: /oop_compito/cards.php");

        }
    }
    if(!($_SESSION["access"] === 'OK')){
        echo 'ACCESSO NEGATO';
    }
}
?></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>