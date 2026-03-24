<?php

require_once __DIR__ . '/../Models/Filme.php';

class FilmeController
{
    private Filme $model;

    public function __construct()
    {
        $this->model = new Filme();
    }

    public function index()
    {
        $filmes = $this->model->getAll();

        require __DIR__ . '/../Views/filmes/index.php';
    }

    public function create()
    {
        require __DIR__ . '/../Views/filmes/create.php';
    }

    public function store()
    {
        $titulo = $_POST['titulo'];
        $diretor = $_POST['diretor'];
        $genero = $_POST['genero'];
        $ano = $_POST['ano'];
        $sinopse = $_POST['sinopse'];

        if ($_FILES['foto']['error'] === 0) {
            $extensao = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
            $extensoesValidas = ['jpg', 'jpeg', 'png', 'webp'];
            if (in_array($extensao, $extensoesValidas)) {
                $nomeFinal = 'foto_' . time() . '.' . $extensao;

                if (move_uploaded_file($_FILES['foto']['tmp_name'], ROOT . '/public/uploads/' . $nomeFinal)) {
                    $foto = $nomeFinal;
                } else {
                    $foto = null;
                }
            } else {
                $foto = null;
            }
        } else {
            $foto = null;
        }

        $this->model->create($titulo, $diretor, $genero, $ano, $sinopse, $foto);

        header('Location: index.php');
        exit;
    }

    public function edit()
    {
        $id = $_GET['id'];

        $filme = $this->model->getById($id);
        require __DIR__ . '/../Views/filmes/edit.php';
    }

    public function update()
    {
        $titulo = $_POST['titulo'];
        $diretor = $_POST['diretor'];
        $genero = $_POST['genero'];
        $ano = $_POST['ano'];
        $sinopse = $_POST['sinopse'];
        $id = $_POST['id'];

        $fotoAtual = $_POST['fotoAtual'];

        if ($_FILES['foto']['error'] === 0) {
            $extensao = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
            $extensoesValidas = ['jpg', 'jpeg', 'png', 'webp'];
            if (in_array($extensao, $extensoesValidas)) {
                $nomeFinal = 'foto_' . time() . '.' . $extensao;

                if (move_uploaded_file($_FILES['foto']['tmp_name'], ROOT . '/public/uploads/' . $nomeFinal)) {
                    $foto = $nomeFinal;
                } else {
                    $foto = $fotoAtual;
                }
            } else {
                $foto = $fotoAtual;
            }
        } else {
            $foto = $fotoAtual;
        }

        $this->model->update($titulo, $diretor, $genero, $ano, $sinopse,$foto, $id);

        header('Location: index.php');
        exit;
    }

    public function destroy()
    {
        $id = $_GET['id'];

        $this->model->delete($id);

        header('Location: index.php');
        exit;
    }

    public function catalogo(){

        $filmes = $this->model->getAll();

        require __DIR__ . '/../Views/filmes/catalogo.php';
    }
}
