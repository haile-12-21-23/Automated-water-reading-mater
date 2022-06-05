<?php
class Database{
    private $serverName="localhost";
    private $password="";
    private $userName="root";
    private $databaseName="awrmtry";
    private function connect(){
        $string="mysql:host=$this->serverName;db_name=$this->databaseName";
        try{
            $con= new PDO($string,$this->userName,$this->password);
        }catch(PDOException $e){
            die($e->getMessage());

        }
       
        return $con;

    }
    public function write($query,$data=array()){

    $con=$this->connect();
    $statement=$con->prepare($query);
    $result=$statement->execute($data);
    
    if($result){
        return true;
    }
    else{
        return false;
    }
    }
public function read($query,$data=array()){
    $con=$this->connect();
    $statement=$con->prepare($query);
    $result=$statement->execute($data);
    if($result){
        $data=$statement->fetchAll(PDO::FETCH_ASSOC);
        if(is_array($data) && count($data)>0){
            return $data;
        }
    }
    return false;
}

}
?>