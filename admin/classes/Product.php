
<?php
include_once "Db.php";


class Product extends Db{


public function fetch_produser(){

$sql="SELECT * FROM products"; 
$stmt=$this->connect()->prepare($sql);
$stmt->execute();
$response=$stmt->fetchAll(PDO::FETCH_ASSOC);
return $response;


}

public function fetch_prodid($prod_id){
   $sql="SELECT * FROM products WHERE prod_id=?";
    $stmt=$this->connect()->prepare($sql);
    $stmt->bindParam(1,$prod_id,PDO::PARAM_INT);
    $stmt->execute();
    $prod=$stmt->fetch(PDO::FETCH_ASSOC);
    return $prod;
    
    
   }
 
   public function update_btn($button,$prod_id,){
    $sql="UPDATE products SET button=? WHERE prod_id=?";
    $stmt=$this->connect()->prepare($sql);
      $stmt->bindParam(1,$button,PDO::PARAM_STR);
      $stmt->bindParam(2,$prod_id,PDO::PARAM_INT);
      $updated=$stmt->execute();
      return $updated;

 }

}



?>