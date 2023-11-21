<?php
include_once "Db.php";


class Fetch extends Db{
    public function fetch_prod_user_details($user_id){
        $sql="SELECT * FROM users WHERE user_id=?";
        $stmt=$this->connect()->prepare($sql);
    $stmt->bindParam(1,$user_id,PDO::PARAM_INT);
    $stmt->execute();
    $user_details=$stmt->fetch(PDO::FETCH_ASSOC);
    
    return $user_details;

    }


    public function fetch_prod($prod_id){
        $sql="SELECT * FROM products WHERE prod_id=?";
        $stmt=$this->connect()->prepare($sql);
    $stmt->bindParam(1,$prod_id,PDO::PARAM_INT);
    $stmt->execute();
    $user_details=$stmt->fetch(PDO::FETCH_ASSOC);
    
    return $user_details;

    }
}


?>