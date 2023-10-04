<?php
    class Database {
        private $host = 'localhost';
        private $usuario = 'root';
        private $senha = '';
        private $banco = '';
        private $porta = '3306';
        private $dbh;
        private $stmt;
    

    
    public function __construtc(){
        $dsn = 'mqsql:host='.$this->host.';port='.$this->porta.';dbname='.$this->banco;
        $opcoes = [
            PDO::ATTR_PERSISTENT => TRUE,
            PDO::ATTR_ERRMODE => PDO::ERROMODE_EXCEPTION
        ];
        try{
            $this->dbh = new PDO($dsn, $this->usuario, $this->senha, $opcoes);
            $dbh = null;
        }catch (PDOException $e){
            print "Erro!: ". $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public function query($sql){
   //     $this->stmt = $this->dbh->prepare($sql);
    }

    public function bind($parametro, $valor, $tipo = null){
        if(is_null($tipo)):
            switch (true):
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                    break;
                    case is_bool($valor):
                        $tipo = PDO::PARAM_BOOL;
                        break;
                        case is_bool($valor):
                        $tipo = PDO::PARAM_NULL;
                        break;
                        default:
                        $tipo = PDO::PARAM_STR;
                    endswitch;
                endif;
                $this->stmt->bindValue($paramentro, $valor, $tipo);
            }
              //  public function executa(){
              //      return $this->stmt->execute();
              //  }
    
                public function resultado(){
                //    $this->executa();
                //    return $this->stmt->fetch(PDO::FETCH_OBJ);
                }
                public function resultados(){
               //     $this->executa();
                //    return $this->stmt->fetchAll(PDO::FETCH_OBJ);
                }
                public function totalResultados(){
                    return $this->rowCount;
                }
                public function ultimoIdInserido(){
                    return $this->dbh->lastInsertId();
                }
    
       }


?>
