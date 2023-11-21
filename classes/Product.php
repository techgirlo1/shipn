<?php

error_reporting(E_ALL);
include_once "Db.php";

class Product extends Db{
public function insertProduct($prod_name,$prod_weight,$prod_qty,$prod_img,$senders_name,$senders_number,$receivers_name,$receivers_phone,$prod_delivery_state,$prod_delivery_lga,$prod_delivery_address,$user_prodid,$button,$cat_id){

$sql="INSERT INTO products(prod_name,prod_weight,prod_qty,prod_img,senders_name,senders_number,receivers_name,receivers_phone,prod_delivery_state,prod_delivery_lga,prod_delivery_address,user_prodid,button,cat_id)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";



$stmt = $this->connect()->prepare($sql);


$stmt->bindParam(1,$prod_name,PDO::PARAM_STR);
$stmt->bindParam(2,$prod_weight,PDO::PARAM_STR);
$stmt->bindParam(3,$prod_qty,PDO::PARAM_INT);
$stmt->bindParam(4,$prod_img,PDO::PARAM_STR);
$stmt->bindParam(5,$senders_name,PDO::PARAM_STR);
$stmt->bindParam(6,$senders_number,PDO::PARAM_STR);
$stmt->bindParam(7,$receivers_name,PDO::PARAM_STR);
$stmt->bindParam(8,$receivers_phone,PDO::PARAM_STR);
$stmt->bindParam(9,$prod_delivery_state,PDO::PARAM_STR);
$stmt->bindParam(10,$prod_delivery_lga,PDO::PARAM_STR);
$stmt->bindParam(11,$prod_delivery_address,PDO::PARAM_STR);
$stmt->bindParam(12,$user_prodid,PDO::PARAM_INT);
$stmt->bindParam(13,$button,PDO::PARAM_STR);
$stmt->bindParam(14,$cat_id,PDO::PARAM_INT);
$result=$stmt->execute();
 return $result;
}



public function fetch_produser($user_prodid){

    $sql="SELECT * FROM products WHERE user_prodid=?";
    $stmt=$this->connect()->prepare($sql);
    $stmt->bindParam(1,$user_prodid,PDO::PARAM_INT);
    $stmt->execute();
    $response=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $response;

    
 }

}




?>