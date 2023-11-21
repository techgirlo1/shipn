<?php
session_start();
error_reporting(E_ALL);

include_once "guards/user_guard.php";
include_once "classes/User.php";
include_once "partials/header.php";

?>



















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <style><?php include "assets/style.css";?></style>
    <title>Myproject</title>
</head>
<body>
    <div class="container-fluid">
        
             
            <div class="row">
                <div class="col img img-fluid" style="position: relative;">
                  
            <div class="row">
               <div class="col" style="text-align: center;padding: 150px 0px;">
                 <h1>SHI<span>PN logistics helps
                 you deliver your<br>
              product easier and faster.</span></h1>
               </div>
            </div>
          </div>
        </div> 
      
          
          <?php
          
          include_once "partials/footer.php";
          ?>
           
    </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>