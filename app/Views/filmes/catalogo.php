<!doctype html>
<html lang="en">

<head>
    <title>Catalogo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="text-center">

        <div class="container">
            <a href="index.php?action=create" class="btn btn-success">Criar Filme</a>
            <a href="index.php?action=index" class="btn btn-primary">Voltar</a>
            <br><br>

            <h1>Filmes</h1>

            <div class="row g-3">
                <?php foreach ($filmes as $filme): ?>
                    <div class="col-md-3">

                        <?php if ($filme['foto'] != null) { ?>
                            <div class="card bg-dark text-white border-0">
                                <img src="uploads/<?= $filme['foto'] ?>" alt="card-img-top"
                                    style="height: 300px; object-fit: cover; width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= htmlspecialchars($filme['titulo']) ?></h5>
                                    <p class="card-text"><?= htmlspecialchars($filme['diretor']) ?></p>
                                    <p class="card-text"><?= htmlspecialchars($filme['genero']) ?></p>
                                    <p class="card-text"><?= htmlspecialchars($filme['ano']) ?></p>
                                    <p class="card-text"><?= htmlspecialchars($filme['sinopse']) ?></p>
                                    <a href="index.php?action=edit&id=<?= $filme['id'] ?>" class="btn btn-primary">Editar</a>
                                    <a href="index.php?action=destroy&id=<?= $filme['id'] ?>" class="btn btn-danger">Excluir</a>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>