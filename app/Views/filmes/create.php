<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>Filmes</title>
</head>

<body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    <main class="text-center">

        <h1>Adicionar Filmes</h1>

        <div class="card-form card bg-dark text-white p-3 rounded-4">
            <form action="index.php?action=store" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título:
                        <input type="text" name="titulo" id="titulo" required
                            class="form-control bg-dark text-white border-secondary">
                    </label>
                </div>

                <div class="mb-3">
                    <label for="diretor" class="form-label">Diretor:
                        <input type="text" name="diretor" id="diretor" required
                            class="form-control bg-dark text-white border-secondary">
                    </label>
                </div>

                <div class="mb-3">
                    <label for="genero" class="form-label">Gênero:
                        <input type="text" name="genero" id="genero" required
                            class="form-control bg-dark text-white border-secondary">
                    </label>
                </div>

                <div class="mb-3">
                    <label for="ano" class="form-label">Ano:
                        <input type="text" name="ano" id="ano" required
                            class="form-control bg-dark text-white border-secondary">
                    </label>
                </div>

                <div class="mb-3">
                    <label for="sinopse" class="form-label">Sinopse:
                        <input type="text" name="sinopse" id="sinopse" required
                            class="form-control bg-dark text-white border-secondary">
                    </label>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto:
                        <input type="file" name="foto" id="foto"
                            class="form-control bg-dark text-white border-secondary">
                    </label>
                </div>

                <button type="submit" class="btn btn-success">Criar</button>
                <a href="index.php?action=index" class="btn btn-danger">Voltar</a>
            </form>
        </div>
    </main>
</body>

</html>