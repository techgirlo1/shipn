<?php





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row" style="background-color:black ;">
            <div class="col-12" >
                <nav class="navbar navbar-expand-lg"  >
                    <div class="container-fluid">
                        
                      <h1>SHI<span>PN</span><span style="font-size: 10px;">LOGiSTICS</span></h1>


                      
                            <?php if(isset($_SESSION["name"])){
                        ?>
                        <p style="color:white;padding-top:20px;padding-left:200px"> <?php echo $_SESSION["name"] ;?></p>
                        <?php
                        }
                        ?>
                    
                        
                      
                      
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:white">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      
                      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        
                        <ul class="navbar-nav" style="margin-left: 200px;">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php" style="color: white;padding:0px 20px;">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="About.php" style="color: white; padding:0px 20px;">About</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;padding:0px 20px;">
                              Services
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="services.php">Ship</a></li>
                              <li><a class="dropdown-item" href="prod_view.php">Product Details</a></li>
                              <li><a class="dropdown-item" href="transact.php">My Transaction</a></li>
                              <li><hr class="dropdown-divider"></li>
                              
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="contact.php" style="color: white;padding:0px 20px;">Contact</a>
                          </li>
                          </ul>
                       </div>
                      
                          
                        </div>
                </nav>
                </div>
            </div>




            <div class="modal fade" id="trackid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="trackid">Track Shipment</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="post">
                        <div class="modal-body">
                         <p>Please enter your Tracking I.D</p>
                         
                             <input type="text" name="card_no" class="form-control my-3" placeholder="Enter ID">
                             
                         
                        </div>
                        <div class="modal-footer">
                          
                          <button type="submit" class="btn form-control" style="background-color: rgb(30, 255, 0);color: white;">Track</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
</body>
</html>