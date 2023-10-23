<?php
class Livro {
    public function buscarLivros($termo) {
        $conn = new mysqli('localhost', 'root', '', 'bd_biblioteca');
        if ($conn->connect_error) {
            die("Erro na conexão: " . $conn->connect_error);
        }

        $sql = "CALL buscarLivros('$termo')";
        $result = $conn->multi_query($sql);
        $resultados = [];

        if ($result) {
            do {
                if ($result = $conn->store_result()) {
                    while ($row = $result->fetch_assoc()) {
                        $resultados[] = $row;
                    }
                    $result->free();
                }
            } while ($conn->more_results() && $conn->next_result());
        } else {
            echo "Erro na execução da procedure: " . $conn->error;
        }

        $conn->close();
        return $resultados;
    }
}
?>
