<?php

     error_reporting();
      require_once "Db.php";
   class Pay extends Db{

  public function insert_payment($pay_date,$pay_amount,$pay_refcode,$pay_data,$user_payid,$prod_payid,$pay_status){
        $sql= "INSERT INTO payments(pay_date,pay_amount,pay_refcode,pay_data,user_payid,prod_payid,pay_status) VALUES(?,?,?,?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->bindParam(1,$pay_date,PDO::PARAM_STR);
        $stmt->bindParam(2,$pay_amount,PDO::PARAM_INT);
        $stmt->bindParam(3,$pay_refcode,PDO::PARAM_STR);
        $stmt->bindParam(4,$pay_data,PDO::PARAM_STR);
        $stmt->bindParam(5,$user_payid,PDO::PARAM_INT);
        $stmt->bindParam(6,$prod_payid,PDO::PARAM_STR);
        $stmt->bindParam(7,$pay_status,PDO::PARAM_STR);

        $record_inserted=$stmt->execute();
        return $record_inserted;

        if($record_inserted){
            echo true;
        }else{
                 echo false;
        }

}

public function fetch_payment($user_payid){
    $sql="SELECT * FROM payments WHERE user_payid=?";
    $stmt=$this->connect()->prepare($sql);
    $stmt->bindParam(1,$user_payid,PDO::PARAM_INT);
    $stmt->execute();
    $response=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $response;

}

}






?>