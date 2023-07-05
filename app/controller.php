<?php

require_once("model/user.php");

class controller
{
    protected $pdo;
    protected $user_data;
    protected $msg_data;
    protected $msg_type;
    protected $api_key="aeea4572b57fd98fa2855069e59c121d";

    public function __construct(){
        $this->pdo = new PDO('mysql:host=localhost;dbname=vtu','root','');
    }

    public function login($file, $data){
        $student = new user($this->pdo);
        $student = $student->login($data);

        if($student){
            session_start();
            $_SESSION["user_data"]=$student;
            $this->user_data=$_SESSION["user_data"];
            if(isset($this->user_data)){
                header("location: dashboard");
            }
        }else{
            
        }

    }

    public function logout($file, $data){
        session_start();

        if(isset($_SESSION["user_data"])){
            unset($_SESSION["user_data"]);
        }

        session_destroy();
        header("location: login");
    }

    public function airtime($file, $data){
        // var_dump($data);
        $number = $data["number"];
        $name = $data["name"];
        if(isset($data["mtn-airtime-type"])){
            $mtn_airtime_type = $data["mtn-airtime-type"];
        }else{
            $mtn_airtime_type = "001";
        }
        $amount = intval($data["amount"]);


        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://easyaccess.com.ng/api/airtime.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => array(
        'network' => $name,
        'amount' => $amount,
        'mobileno' => $number,
        'airtime_type' => $mtn_airtime_type, //001 for VTU, 002 for Share and Sell. Share and Sell is only applicable to MTN network. For other networks, use 001 (VTU).
        'client_reference' => 'tranx6896598952', //update this on your script to receive webhook notifications
        ),
        CURLOPT_HTTPHEADER => array(
        "AuthorizationToken: $this->api_key", //replace this with your authorization_token
        "cache-control: no-cache"
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($response, true);

        return $result;

        // print_r($result);

        // echo $result["success"];
        // echo $result["message"];


    }

    public function data($file, $data){
        // return $data;
        $number = $data["phone_number"];
        $name = intval($data["name"]);
        $data_plan = intval($data["data_plan"]);
        $amount = substr($data["amount"], 3);

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://easyaccess.com.ng/api/data.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => array(
        'network' =>$name,
        'mobileno' => $number,
        'dataplan' => $data_plan,
        'client_reference' => 'tranx6896598952', //update this on your script to receive webhook notifications
        ),
        CURLOPT_HTTPHEADER => array(
        "AuthorizationToken: $this->api_key", //replace this with your authorization_token
        "cache-control: no-cache"
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($response, true);

        return $result;
    }

    public function verifyIuc($file, $data){
        $iuc = $data["iuc"];
        $tv_type = intval($data["tv_type"]);

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://easyaccess.com.ng/api/verifytv.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => array(
        'company' =>02,
        'iucno' => $data["iuc"],
        ),
        CURLOPT_HTTPHEADER => array(
        "AuthorizationToken: 904cc8b30fb06707862323030783481b", //replace this with your authorization_token
        "cache-control: no-cache"
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;
    }
}