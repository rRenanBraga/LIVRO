<?php
require_once('models/Livro.php');

class Buscar extends Controller{
    public function buscarLivros($termo) {
        $livroModel = new Livro();
        $resultados = $livroModel->buscarLivros($termo);
        include('views/busca.php');
    }
}
?>
