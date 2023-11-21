<?php

require_once "../admin/classes/Category.php";





if($_POST){
    $state_id =$_POST["statekey"];

    $lg= new Category();
   $lga= $lg->fetch_lga($state_id);

   $lg_options="";
   foreach($lga as $local){
     $lg_name=$local['lga_name'];
      $lg_options .="<option> $lg_name </option>";
   }

echo $lg_options;

}



?>