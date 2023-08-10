<?php
class Banco{
    private $host = "127.0.0.1";
    private $usuario = "root";
    private $senha = "";
    private $banco = "feitaTecnica";
    private $porta = "3306";
    private $con=null;

    private function conectar()
    {
        $this->con = new mysqli( $this->host, $this->usuario,$this->senha,$this->banco, $this->porta);
        if ( $this->con->connect_error) {
            die("Falha ao conectar: " . $this->con->connect_error);
        }
    }

    public function getConexao()
    {

    if ( $this->con==null) {
        $this->conectar();
    }
        return $this->con;
        
    }
    
    public function selectAll($table)
    {
        $query = "select * from $table";
        $stmt = $this->getConexao()->prepare($query);   
        $stmt->execute();  //executa a  instrução sql no sgbd
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    

}
   