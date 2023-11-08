<?php
require 'modelobra.php';

class Historia extends Controller {
    public function getLivrosPorGenero($genero) {
        $model = new ModelObra();
        $livros = $model->getLivrosPorGenero($genero);
        var_dump($livros);
        return $livros;
    }
}

// Uso do controlador
$controller = new Controller();
$genero = "Historia"; // Substitua pelo gênero desejado
$livros = $controller->getLivrosPorGenero($genero);

// Carregue a view com os dados
include 'view.php';
?>
