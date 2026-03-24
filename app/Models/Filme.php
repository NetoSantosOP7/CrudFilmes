<?php

require_once __DIR__ . '/../../config/database.php';

class Filme{

    private PDO $db;

    public function __construct() {
        global $pdo;
        $this->db = $pdo;
    }

    public function getAll(){
        return $this->db->query("SELECT * FROM filmes")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id){
        $stmt = $this->db->prepare("SELECT * FROM filmes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create($titulo, $diretor, $genero, $ano, $sinopse, $foto){
        $stmt = $this->db->prepare("INSERT INTO filmes (titulo, diretor, genero, ano, sinopse, foto) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$titulo, $diretor, $genero, $ano, $sinopse, $foto]);
    }

    public function update($titulo, $diretor, $genero, $ano, $sinopse, $foto, $id){
        $stmt = $this->db->prepare("UPDATE filmes SET titulo = ?, diretor = ?, genero = ?, ano = ?, sinopse = ?, foto = ? WHERE id = ?");
        $stmt->execute([$titulo, $diretor, $genero, $ano, $sinopse, $foto, $id]);
    }

    public function delete($id){
        $stmt = $this->db->prepare("DELETE FROM filmes WHERE id = ?");
        $stmt->execute([$id]);
    }

}