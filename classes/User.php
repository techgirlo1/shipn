<?php



include_once "Db.php";

 class User extends Db{
    public function register_user($fullname,$email,$password,$phone,$state,$address){

      $sql="SELECT * FROM users WHERE  user_email = ?";
      $stmt=$this->connect()->prepare($sql);
      $stmt->bindParam(1,$email,PDO::PARAM_STR);
      $stmt->execute();
      $user_count= $stmt->rowCount();
      
      if($user_count > 0){
         
        $_SESSION["log_error"]="email already exist";
        header("location:../signup.php");
        die();
         
      }


      

      $sql="INSERT INTO users(user_fullname,user_email,user_password,user_phone,user_state,user_address) VALUES(?,?,?,?,?,?)";
         $stmt=$this->connect()->prepare($sql);
         $stmt->bindParam(1,$fullname,PDO::PARAM_STR);
         $stmt->bindParam(2,$email,PDO::PARAM_STR);
         $stmt->bindParam(3,$password,PDO::PARAM_STR);
         $stmt->bindParam(4,$phone,PDO::PARAM_STR);
          $stmt->bindParam(5,$state,PDO::PARAM_STR);
         $stmt->bindParam(6,$address,PDO::PARAM_STR);
         $response=$stmt->execute();
         return $response;


    }




    public function login($email,$password){
        // check if email is in db
        $sql="SELECT * FROM users WHERE  user_email = ?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->bindParam(1,$email,PDO::PARAM_STR);
        $stmt->execute();
        $user_count= $stmt->rowCount();
        
    
        if($user_count < 1){
           return "Either email or password is incorrect";
           die();
        }
      $user=$stmt->fetch(PDO::FETCH_ASSOC);
      
      $password_matches=password_verify($password,$user["user_password"]);
       if($password_matches){
    
          $_SESSION["user_id"]=$user["user_id"];
           $_SESSION["name"]=$user["user_fullname"];
           header("location:../home.php");
           die();
        
         }
    
        return "Either email or password is incorrect";
        die();


      
        
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

    

}


?>