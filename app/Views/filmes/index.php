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

<body>
  <main class="container text-center py-4">

    <h1>Filmes</h1>

    <a href="index.php?action=create" class="btn btn-primary">Novo Filme</a>
    <a href="index.php?action=catalogo" class="btn btn-primary">Catalogo</a><br><br>

    <div class="table-wrapper">
      <div class="table-responsive">
        <table class="table table-dark table-hover table-striped table-bordered">
          <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Diretor</th>
            <th>Genero</th>
            <th>Ano</th>
            <th>Sinopse</th>
            <th>Acoes</th>
          </tr>

          <?php foreach ($filmes as $filme): ?>
            <tr>
              <td><?= htmlspecialchars($filme['id']) ?></td>
              <td><?= htmlspecialchars($filme['titulo']) ?></td>
              <td><?= htmlspecialchars($filme['diretor']) ?></td>
              <td><?= htmlspecialchars($filme['genero']) ?></td>
              <td><?= htmlspecialchars($filme['ano']) ?></td>
              <td><?= htmlspecialchars($filme['sinopse']) ?></td>
              <td>
                <a href="index.php?action=edit&id=<?= $filme['id'] ?>" class="btn btn-success">Editar</a>
                <a href="index.php?action=destroy&id=<?= $filme['id'] ?>" class="btn btn-danger">Excluir</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </main>
</body>

</html>