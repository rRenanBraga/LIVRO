<?php
$controller = new Buscar();

if(isset($_POST['termo_busca'])) {
    $termo = $_POST['termo_busca'];
    $controller->buscarLivros($termo);
}
?>
