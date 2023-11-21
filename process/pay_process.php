<?php


require_once "../classes/Pay.php";



  if($_POST){
   $reference=$_POST["reference"];
   $user_id=$_POST["user_id"];
   $prod_id=$_POST["prod_id"];

    $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_4ebaa855f0d3354a68802ac0738483fc080cfee1",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }

$res=json_decode($response);

$response=$res->data;


$f_response=json_encode($response);
$pay1=new Pay();
   $payment=$pay1->insert_payment($response->paid_at,$response->amount/100,$response->reference,$f_response, $user_id,$prod_id,$response->status);




  }
?>