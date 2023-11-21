<?php

 require_once "Db.php";

  class Category extends Db{
   public function fetch_category(){
        $sql="SELECT * FROM categories";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertCat($cat_type){
      $sql="INSERT INTO categories(cat_type) VALUES(?)";
     $stmt = $this->connect()->prepare($sql);
      $stmt->bindParam(1,$cat_type,PDO::PARAM_STR);
        $result=$stmt->execute();
        return $result;

    } 

    public function fetch_all_states(){
       $sql="SELECT * FROM `state`";
      $stmt=$this->connect()->prepare($sql);
      $stmt->execute();
    $states=$stmt->fetchAll(PDO:: FETCH_ASSOC);
    return $states;
  }
  
  
  
  public function fetch_lga($state_id){
      $sql="SELECT * FROM lga WHERE state_id=?";
      $stmt=$this->connect()->prepare($sql);
      $stmt->bindParam(1,$state_id,PDO::PARAM_INT);
      $stmt->execute();
       $lga=$stmt->fetchAll(PDO::FETCH_ASSOC);
       return $lga;
  }

}
?>