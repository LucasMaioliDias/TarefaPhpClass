<?php
class Database {
    
    
    public function connect() {
         
        $bank = new PDO('mysql:host=localhost;dbname=php', 'root', 'etec');
        
    }
    

    public function disconnect() {
        $this->connection = null;
        
    }

    Public function select(){
        $query = $bank->prepare("SELECT * FROM tblogin WHERE nmusuario = :usuario AND nrsenha = :senha");
        $query->bindParam(':usuario', $usuario);
        $query->bindParam(':senha', $senha);
        $query->execute();
        $flag = $query->fetch(PDO::FETCH_ASSOC);
        

    }
}

