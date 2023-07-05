<?php

require_once("app/controller.php");
require_once("model/transaction.php");

class PostController extends controller
{
  public function airtime($file, $data){
    $dat =  controller::airtime($file, $data);
    // print_r ($dat);
    $success= $dat["success"];
    $message= $dat["message"];

    if($success == "true"){
      $status="success";

      $transaction = new transaction($this->pdo);
      $transaction->StoreTransactionAirtime($data,$status);

      if($transaction){
        session_start();
        $msg_type="success";
        $msg_data="Your Airtime Purchase was a succcess kindly check your transaction history.....If you have any issue kindly contact the customer service";
        $_SESSION["msg_type"]=$msg_type;
        $_SESSION["msg_data"]=$msg_data;
        header("location: services");
      }
      // var_dump ($success);
      
    }else{
      $status="failed";

      $transaction = new transaction($this->pdo);
      $transaction->StoreTransactionAirtime($data,$status);

      if($transaction){
        session_start();
        $msg_type="failed";
        $msg_data="Unable to process your Request make sure you input the correct details.  if this error persist please contact Custoner Care";
        $_SESSION["msg_type"]=$msg_type;
        $_SESSION["msg_data"]=$msg_data;

        
        header("location: services");
      }
    }
  }

  public function data($file, $data){
    $dat = controller::data($file, $data);

    $success=$dat["success"];
    $message=$dat["message"];

    if($success == "true"){
      $status="success";

      $transaction = new transaction($this->pdo);
      $transaction->StoreTransactionData($data,$status);

      if($transaction){
        session_start();
        $msg_type="success";
        $msg_data="Your Data Purchase was a succcess kindly check your transaction history.....If you have any issue kindly contact the customer service";
        $_SESSION["msg_type"]=$msg_type;
        $_SESSION["msg_data"]=$msg_data;
        header("location: dashboard");
      }
    }else{
      $status="failed";

      $transaction = new transaction($this->pdo);
      $transaction->StoreTransactionData($data,$status);

      if($transaction){
        session_start();
        $msg_type="failed";
        $msg_data="Unable to process your Request make sure you input the correct details.  if this error persist please contact Custoner Care";
        $_SESSION["msg_type"]=$msg_type;
        $_SESSION["msg_data"]=$msg_data;


        header("location: dashboard");
      }
    }
  }

  public function verifyIuc($file, $data){
    $dat = controller::verifyIuc($file, $data);
    return $dat;
  }
}