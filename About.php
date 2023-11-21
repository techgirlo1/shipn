
<?php
session_start();
error_reporting(E_ALL);
include "partials/header.php";

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
    <input type="hidden" name="user_id" value= "<?php echo$_SESSION['user_id'] ;?>">
             
            <div class="row" id="about" >
              <div class="col-md-5 " id="abt">
                 <img src="assets/img/img3 .jpg" class="img-fluid my-5 mx-2">    
              </div>
              <div class="col-md-5 my-5 mx-2" id="more">
                  <h3>KNOW MORE <br>ABOUT OUR <span>COMPANY</span></h3>  
                  <p>SHIPN logistics is company is a company that helps sales<br>
                     company to connects with logistics companies in any part <br>
                     of Nigeria to help them deliver product to their respectives<br>
                     customers faster and easily.Our core goal is to is to make <br>
                     delivery of products easier.Both the sales companies and <br>
                     logistics companies can register on our website.We are<br>
                    exploring possibilities and ideas that can help us improve<br>
                    our services.We are looking forward to building the future of<br>
                    Logistics. </p>
              </div>  
        </div> 
      
          <?php
          include "partials/footer.php"
          
          ?>
          
           
    </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>