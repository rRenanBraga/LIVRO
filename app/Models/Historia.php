<?php
class ModelObra {
    private $db;

    public function __construct() {
        // Conexão com o banco de dados
        $this->db = new PDO("mysql:host=localhost;dbname=bd_biblioteca", "root", "renan");
    }

    public function getLivrosPorGenero($genero) {
        $query = "SELECT obra.obra_titulo, obra.obra_ano_publicado, obra.obra_descricao, obra.obra_editora, obra.obra_nr_pagina, obra.obra_imagem, autor.auto_id, povo_indigena.poin_id
        FROM obra
        JOIN autor ON obra.auto_id = autor.auto_id
        JOIN categorizar ON obra.obra_id = categorizar.obra_id
        JOIN genero ON categorizar.gene_id = genero.gene_id
        JOIN povo_indigena ON autor.poin_id = povo_indigena.poin_id
        WHERE genero.gene_nome = :genero";
    
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":genero", $genero, PDO::PARAM_STR);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

?>
