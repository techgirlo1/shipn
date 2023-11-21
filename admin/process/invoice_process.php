<?php
session_start();
require_once "../classes/Invoice.php";
error_reporting(E_ALL);
if($_POST){
if(isset($_POST["addprice"])){
       $sname= $_POST["sname"];
       $rname=$_POST["rname"];
       $pname= $_POST["pname"];
       $pqty= $_POST["pqty"];
       $pweight= $_POST["pweight"];
       $pprice= $_POST["pprice"];
       $user_id= $_POST["user_id"];
       $prod_id= $_POST["prod_id"];


       $invoices= new Invoice();
       $inv=$invoices->insertInvoice($sname,$rname,$pname,$pweight,$pqty,$pprice,$user_id,$prod_id);
       

       if($inv){
        $_SESSION["successful"]="invoice added sucessfully";
        header("location:../prod_view.php");
        die();

       }
       }


       


 



}



    
    
    




?>