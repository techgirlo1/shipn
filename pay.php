
<?php
error_reporting(E_ALL);

session_start();
include_once "guards/user_guard.php";
include_once "admin/classes/Invoice.php";

     $user_id=$_SESSION["user_id"];
     $user1= new Invoice();
     $user=$user1->fetch_user_details($user_id);
    $final_user_id =$user['user_id'];

    if($_POST){
      if(isset($_POST["payment"])){
          $prod_id=$_POST["prod"];
          
      }
  
      $invoice1= new Invoice();
      ($invoice=$invoice1->fetch_produser($prod_id));
    ($invoices=$invoice1->fetch_payprod($prod_id));
      
         
      
  }
    
  
  
     

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
        <div class="row" style="background-color: black;">
            <div class="col-12">
                
                        
                      <h1>SHI<span>PN</span><span style="font-size: 10px;">LOGiSTICS</span></h1>
                      
                    
                    

                          
                      
                      
                     
                    
               
                </div>
            </div>
            <div class="row">
                <div class="col-12"style="width: 500px;margin:auto">


               
                <form action="services.php" method="post">
                        <button type="submit" class="btn btn-dark" style="margin-top: 20px;">Back</button>
                     </form>
                     

            
            <form id="paymentForm">
  <div class="form-group mt-3">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" value="<?php  echo $user["user_email"];?>" disabled required  class="form-control my-3"/>
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="number" id="amount" required  class="form-control my-3" value="<?php echo $invoice["prod_price"];?>" disabled />
  </div>
  <input type="hidden" name="user_id" value="<?php echo $user["user_id"];?>" id="user_id">
  <input type="hidden" name="prod_id" value="<?php echo $invoice["prod_invid"]?>" id="prod_id">
  <div class="form-group">
    <label for="first-name">First Name</label>
    <input type="text" id="first-name" class="form-control my-3"/>
  </div>
  <div class="form-group">
    <label for="last-name">Last Name</label>
    <input type="text" id="last-name" class="form-control my-3" />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()" class="btn btn-success">Pay </button>
 </div>

  </form>
       </div>
        </div>


      





    
















<script src="assets/scripts/pooper.js" crossorigin="anonymous"></script>
<script src="assets/scripts/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="assets/scripts/script.js" crossorigin="anonymous"></script>
<script src="assets/scripts/jquery313.js"></script>




<script src="https://js.paystack.co/v1/inline.js"></script>

<script>

var paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener('submit', payWithPaystack, false);
function payWithPaystack(e) {
    e.preventDefault();
  var handler = PaystackPop.setup({
    key: 'pk_test_745c26fe026acd0a741b900d09a2f91a3f886691', // Replace with your public key
    email: document.getElementById('email-address').value,
    amount: document.getElementById('amount').value * 100 , // the amount value is multiplied by 100 to convert to the lowest currency unit
    currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
    // ref: 'YOUR_REFERENCE', // Replace with a reference you generated
    callback: function(response) {
      //this happens after the payment is completed successfully
     var reference = response.reference;
      alert('Payment complete! Reference: ' + reference);
      // Make an AJAX call to your server with the reference to verify the transaction
    var user_id=document.getElementById("user_id").value;
    var prod_id=document.getElementById("prod_id").value;
          $.ajax({
           type: "post",
           url: "process/pay_process.php",
           data: {"reference": reference, "user_id":user_id ,"prod_id":prod_id},
        
           success: function(response){
                var data = JSON.parse(response);
                // if(data.success== true){
                //     alert("Payment successful.");
                // }else{
                //     alert("payment failed.Please keep the ref code in case you have a complaint");
                // }
           }


          });




    },
    onClose: function() {
      alert('Transaction was not completed, window closed.');
    },
  });
  handler.openIframe();
}

</script>

</body>
</html>
                    


                    



                    </div>
                </div>

               
                
            
                    
                  
                 
    
    
                </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>