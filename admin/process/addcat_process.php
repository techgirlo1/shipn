<?php

include_once "../classes/Category.php";
    if($_POST){
        if (isset($_POST["subcat"])){
            $cat= $_POST["cat"];


     $category1= new Category();
      $response=$category1->insertCat($cat);

      if($response){
        $_SESSION["successful"]="category added succesfully successfully";
            header("location:../addcat.php");
            die();
        }


        }
    }



?>