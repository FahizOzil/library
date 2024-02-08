<?php 
  try {
class database{
  private $connection;
  private $statment;

  function __construct($user='root',$pass=""){
    $dsn = "mysql:host=localhost;port=3306;dbname=library";
    $this->connection = new PDO($dsn,$user,$pass);
    $this->connection->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    // $this->connection->beginTransaction();
   }

   function query($queryCommand , $param = []){
     $this->statment = $this->connection->prepare($queryCommand);
     $this->statment->execute($param);
    //  $this->connection->commit();
     return $this;
   }

   function first(){
    return $this->statment->fetch(PDO::FETCH_ASSOC);
   }
   function get(){
    return $this->statment->fetchAll(PDO::FETCH_ASSOC);
   }

  }


}
catch (Exception $e) {
  
  $e->getMessage();

 }

?>