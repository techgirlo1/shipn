<?php

include_once "Db.php";
class Payment extends Db{
public function fetch_payment(){
    $sql="SELECT * FROM payments";
    $stmt=$this->connect()->prepare($sql);
    
    $stmt->execute();
    $payment=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $payment;
    
}


}
?>