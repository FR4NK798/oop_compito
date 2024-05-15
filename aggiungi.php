<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <h1 class="fs-1">Aggiungi prodotto
    </h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <form style="width: 500px" action="" method="POST">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome prodotto</label>
                        <input type="text" class="form-control" name="nome" id="nome" required />
                    </div>

                    <div class="mb-3">
                        <label for="descrizione" class="form-label">Descrizione prodotto</label>
                        <input type="text" class="form-control" name="descrizione" id="descrizione" required />
                    </div>

                    <div class="mb-3">
                        <label for="prezzo" class="form-label">Prezzo prodotto</label>
                        <input type="number" class="form-control" name="prezzo" id="prezzo" required />
                    </div>

                    <div class="mb-3">
                        <label for="immagine" class="form-label">Immagine prodotto</label>
                        <input type="text" class="form-control" name="immagine" id="immagine" required />
                    </div>


                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </form>
                <div>

                <?php
                $id = $_POST['id'];
                $name = $_POST['name'];
                $ingredients = $_POST['ingredients'];
                $price = $_POST['price'];
                
                $stmt = $pdo->prepare("UPDATE dishes SET name = :name, ingredients = :ingredients, price = :price WHERE id = :id");
                $stmt->execute([
                    'id' => $id,
                    'name' => $name,
                    'ingredients' => $ingredients,
                    'price' => $price,
                ]);
                
                header("Location: /IFOA0124/S1L4-database-mysql-2/1-search-and-pagination/index.php");
                ?>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>