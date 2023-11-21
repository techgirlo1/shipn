
<?php
    include_once "Db.php";
    
     class Admin extends Db{
        public function register_admin($email,$password){
          $sql="SELECT * FROM admins WHERE  admin_email = ?";
          $stmt=$this->connect()->prepare($sql);
          $stmt->bindParam(1,$email,PDO::PARAM_STR);
          $stmt->execute();
          $admin_count= $stmt->rowCount();
          if($admin_count > 0){
          $_SESSION["log_error"]="email already exist";
            header("location:../signup.php");
            die();
             
          }
          
          $sql="INSERT INTO admins(admin_email,admin_password) VALUES(?,?)";
             $stmt=$this->connect()->prepare($sql);
             $stmt->bindParam(1,$email,PDO::PARAM_STR);
             $stmt->bindParam(2,$password,PDO::PARAM_STR);
             $response=$stmt->execute();
             return $response;
    
    
        }
    
    
    
    
        public function login($email,$password){
         $sql="SELECT * FROM admins WHERE  admin_email = ?";
            $stmt=$this->connect()->prepare($sql);
            $stmt->bindParam(1,$email,PDO::PARAM_STR);
            $stmt->execute();
            $admin_count= $stmt->rowCount();
              if($admin_count < 1){
               return "Either email or password is incorrect";
               die();
            }
          $admin=$stmt->fetch(PDO::FETCH_ASSOC);
          $password_matches=password_verify($password,$admin["admin_password"]);
           if($password_matches){
            $_SESSION["admin_id"]=$admin["admin_id"];
               header("location:../addcat.php");
               die();
            
             }
        
            return "Either email or password is incorrect";
            die();
            
        }
       }
    
    
    ?>











  


  