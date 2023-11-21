<?php
session_start();
error_reporting(E_ALL);

include_once "partials/header.php";
 require_once "guards/user_guard.php";
require_once "admin/classes/Category.php";
 

 

 

 

   $cat= new Category();
   $categories=$cat->fetch_category();
   $states=$cat->fetch_all_states();








   
   
   
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
        

             
            <div class="row" id="serve">
               <div class="col-12">
                    <h3>HOW CAN WE SERVE YOU</h3>
                    
                    <?php
                    if(isset($_SESSION["log_error"])){
                    ?>
                       
                        
                    <p class="text-center mt-5 py-2 alert alert-danger alert-dismissible" style="color:black"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><?php echo $_SESSION["log_error"];?></p>
                    
                    <?php unset($_SESSION["log_error"]);?>

               <?php
                    }
               ?>
                    
              
               <div class="row">
                <div class="col-12" id="service">
                <b><p style="margin-top: 10px;color: black;"> Please Select the appropraite <br>transport for your products</p></b> 
                <div class="row" id="served">
                  <div class="col-md-6">
                    <a href=""data-bs-toggle="modal" data-bs-target="#shipme"><img src="assets/img/bike-no-bg.png" class="img-fluid mt-5"></a>
                  </div>
                  <div class="col-md-6">
                    <a href=""data-bs-toggle="modal" data-bs-target="#shipme"><img src="assets/img/car-no-bg.png" class="img-fluid mt-5"></a>
                  </div>
                  <div class="col-md-6">
                    <a href=""data-bs-toggle="modal" data-bs-target="#shipme"><img src="assets/img/mini.jpg" class="img-fluid mt-5" ></a>
                  </div>
                  <div class="col-md-6">
                    <a href=""data-bs-toggle="modal" data-bs-target="#shipme"><img src="assets/img/truck-no-bg.png" class="img-fluid mt-5"></a>
                  </div>
                </div>
            </div>
        </div>
        </div> 
    </div> 



    
        
        
    
        <div class="modal fade" id="shipme" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="shipme"><b>Please kindly fill in your Products Details</b></h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="post" action="process/services_process.php" enctype="multipart/form-data">
                    <b><p style="text-align: center;">Sender Info</p></b>
                     
                     <input type="text" name="sname" placeholder="Senders Name" class="form-control my-3"required>
                     <input type="number" name="snumber" placeholder="Phone Number" class="form-control my-3" required>
                    
                     
                     
                     <textarea name="pickup" placeholder="Pick up Address" class="form-control my-3"></textarea>
                     <b><p style="text-align: center;" required>Receivers Info</p></b>
                     
                     <input type="text" name="rname" placeholder=" Receivers Name" class="form-control my-3"required>
                     <input type="number" name="number" placeholder="Phone Number" class="form-control my-3"required>
                     
                     
                     
    <select name="state" id="stateid" class="form-control my-3">
        <option value="" disabled selected>Select State</option>

    <?php foreach($states as $state){ ?>
         <option value="<?php echo $state['state_id'];?>"><?php echo $state['state_name'];?></option>;
    <?php } ?>

    </select>


    
    <select name="lga" id="lga" class="form-control my-3">
      <option value="" disabled selected>Select LGA</option>
    </select>
    
                    
                     <textarea name="Delivery" placeholder="Delivery Address" class="form-control my-3"></textarea>

                    
                     <b><p style="text-align: center;"> Items Info</p></b>

                     <input type="text" name="pname" placeholder="Product name" class="form-control my-3">
                     <select name="category" class="form-control">
                      <option value="type" disabled selected>Product type</option>
                    


                     <?php foreach($categories as $cat){?>

                      <option value="<?php echo $cat["cat_id"]?>"><?php echo $cat["cat_type"]?></option>

                      <?php   } ?> 

                </select>
                  <textarea name="Description" placeholder="Products Description" class="form-control my-3"></textarea>
                  <input type="number" name="quantity" placeholder="Products Qty" class="form-control my-3"required>
                     <input type="text" name="weight" placeholder="Products weight" class="form-control my-3"required>
                     
                     <label for="pics">Upload item</label>
                    <input type="file" name="pics" class="form-control my-3" id="pics">


                    <input type="hidden" name="user_id" value= "<?php echo$_SESSION['user_id'] ;?>">
                  <input type="hidden" name="button" value="Create Invoice">
                  
                  
                     
                     
                  
                </div>
                <div class="modal-footer">
                
                  <button type="submit" name="next" style="background-color: rgb(30, 255, 0);color: white;width: 500px;text-align: center;border-radius: 10px;height:30px ;">Next</button>
                  
                </div>
              </form>
                
              </div>
            </div>
          </div>
          
        </div>
</nav>
</div>
</div>


             <?php
            include_once "partials/footer.php";
          ?>
    </div>
    
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>


    <script src="jquery.js"></script>

    <script>
     $(document).ready(function(){

        $("#stateid").change(function(){
            var stateid = $(this).val();
            $("#lga").load("process/dest_pro.php", {"statekey" : stateid}, function(response,status,xhr){
                console.log(response);
            
            });
        });
     });


    </script>
    
</body>
</html>