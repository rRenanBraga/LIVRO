<?php
require 'modelobra.php';

class Controller {
    public function getLivrosPorGenero($genero) {
        $model = new ModelObra();
        $livros = $model->getLivrosPorGenero($genero);

        // Carregue a view com os dados
        include 'view.php';
    }
}

// Uso do controlador
$controller = new Controller();
$genero = "conto"; // Substitua pelo gênero desejado
$controller->getLivrosPorGenero($genero);
?>
