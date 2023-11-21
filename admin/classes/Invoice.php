<?php
   error_reporting(E_ALL);
   
   include_once "Db.php";
   class Invoice extends Db{

    public function insertInvoice($sender_name,$receiver_name,$prod_name,$prod_weight,$prod_qty,$prod_price,$user_invid,$prod_invid){

     $sql="INSERT INTO invoices(sender_name,receiver_name,prod_name,prod_weight,prod_qty,prod_price,user_invid,prod_invid)VALUES(?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(1,$sender_name,PDO::PARAM_STR);
        $stmt->bindParam(2,$receiver_name,PDO::PARAM_STR);
        $stmt->bindParam(3,$prod_name,PDO::PARAM_STR);
        $stmt->bindParam(4,$prod_weight,PDO::PARAM_STR);
        $stmt->bindParam(5,$prod_qty,PDO::PARAM_INT);
        $stmt->bindParam(6,$prod_price,PDO::PARAM_INT);
        $stmt->bindParam(7,$user_invid,PDO::PARAM_INT);
        $stmt->bindParam(8,$prod_invid,PDO::PARAM_INT);
        $result=$stmt->execute();
         return $result;
        }

        public function fetch_all(){
          $sql="SELECT * FROM invoices";
          $stmt=$this->connect()->prepare($sql);
          
          $stmt->execute();
          $invoice=$stmt->fetchAll(PDO::FETCH_ASSOC);
          return $invoice;
          }



public function fetch_produser($prod_invid){
          $sql="SELECT * FROM invoices WHERE prod_invid=?";
          $stmt=$this->connect()->prepare($sql);
          $stmt->bindParam(1,$prod_invid,PDO::PARAM_INT);
          $stmt->execute();
          $response=$stmt->fetch(PDO::FETCH_ASSOC);
          return $response;
          }

          
          
          public function fetch_user_details($user_id){
          $sql="SELECT * FROM users WHERE  user_id = ?";
          $stmt=$this->connect()->prepare($sql);
          $stmt->bindParam(1,$user_id,PDO::PARAM_INT);
          $stmt->execute();
          $user=$stmt->fetch(PDO::FETCH_ASSOC);
          return $user;
           $_SESSION["user_id"]=$user["user_id"];
          
    
        }


        public function fetch_payprod($prod_payid){
          $sql="SELECT * FROM payments WHERE  prod_payid = ?";
          $stmt=$this->connect()->prepare($sql);
          $stmt->bindParam(1,$prod_payid,PDO::PARAM_INT);
          $stmt->execute();
          $invoice=$stmt->fetch(PDO::FETCH_ASSOC);
          return $invoice;
          
          
      
        }

        
    
    
        

        

         
          
            
            
      

           
   }

  // $prod= new Invoice();
  //   print_r($product=$prod->fetch_produser(2,8));

?>