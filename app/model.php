<?php

class model
{
    protected $pdo;
    protected $table;
    protected $transaction_table;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function login($data){
        $email = $data["email"];
        $password =$data["password"];

        $stn = $this->pdo->prepare("SELECT * FROM $this->table WHERE email = '$email' AND password = '$password'");
        $stn->execute();
        $result = $stn->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function StoreTransactionAirtime($data,$status){

        $email=$data["email"];
        $type="airtime_purchase";
        $phone_nuumber=$data["number"];
        


        if($data["name"]==01){
            $name="MTN_NETWORK";
        }elseif ($data["name"]==02) {
            $name="GLO_NETWORK";
        }elseif ($data["name"]==03) {
            $name="AIRTEL_NETWORK";
        }elseif ($data["name"]==03) {
            $name="9MOBILE_NETWORK";
        }
        $airtime_name=$name;


        if($data["mtn-airtime-type"]==001){
            $airtime_type="VTU";
        }elseif ($data["mtn-airtime-type"]==002) {
            $airtime_type="SME";
        }
        if(empty($data["mtn-airtime-type"])){
            $airtime_type = "VTU";
        }

        $actual_airtime_type=$airtime_type;
        $amount=intval($data["amount"]);
        $actual_status = $status;

        if($status=="success"){
            $user_amount = $data["user_amount"];
            $present_user_balance = $user_amount-$amount;

            $stn = $this->pdo->prepare("UPDATE $this->table SET balance='$present_user_balance' WHERE email='$email'");
            $stn->execute();
        }


        $stn = $this->pdo->prepare("INSERT INTO $this->transaction_table (email, type, phone_number, name, airtime_type, amount, status) VALUES ('$email','$type','$phone_nuumber','$airtime_name','$actual_airtime_type','$amount', '$status')");
        $stn->execute();
        return $stn;
    }

    public function StoreTransactionData($data,$status){

        

        $email=$data["email"];
        $type="data_purchase";
        $phone_nuumber=$data["phone_number"];
        


        if($data["name"]==01){
            $name="MTN_NETWORK";
        }elseif ($data["name"]==02) {
            $name="GLO_NETWORK";
        }elseif ($data["name"]==03) {
            $name="AIRTEL_NETWORK";
        }elseif ($data["name"]==03) {
            $name="9MOBILE_NETWORK";
        }
        $airtime_name=$name;


        switch ($data["data_plan"]) {
            case '50':
                $data_type="[mtn] 500MB (SME)";
                break;
            
            case '51':
                $data_type="[mtn] 1GB (SME)";
                break;
            
            case '52':
                $data_type="[mtn] 2GB (SME)";
                break;
            
            case '53':
                $data_type="[mtn] 3GB (SME)";
                break;
            
            case '54':
                $data_type="[mtn] 5GB (SME)";
                break;
            
            case '91':
                $data_type="[mtn] 10GB (SME)";
                break;
            
            case '180':
                $data_type="[mtn] 500MB (CG_LITE)";
                break;
            
            case '181':
                $data_type="[mtn] 1GB (CG_LITE)";
                break;
            
            case '182':
                $data_type="[mtn] 2GB (CG_LITE)";
                break;
            
            case '183':
                $data_type="[mtn] 3GB (CG_LITE)";
                break;
            
            case '184':
                $data_type="[mtn] 5GB (CG_LITE)";
                break;
            
            case '185':
                $data_type="[mtn] 10GB (CG_LITE)";
                break;
            
            case '45':
                $data_type="[mtn] 500MB (CG)";
                break;
            
            case '46':
                $data_type="[mtn] 1GB (CG)";
                break;
            
            case '47':
                $data_type="[mtn] 2GB (CG)";
                break;
            
            case '48':
                $data_type="[mtn] 3GB (CG)";
                break;
            
            case '49':
                $data_type="[mtn] 5GB (CG)";
                break;
            
            case '88':
                $data_type="[mtn] 10GB (CG)";
                break;
            
            case '152':
                $data_type="[mtn] 750MB (Direct)";
                break;
            
            case '83':
                $data_type="[mtn] 1.5GB (Direct)";
                break;
            
            case '84':
                $data_type="[mtn] 2GB (Direct)";
                break;
            
            case '58':
                $data_type="[mtn] 3GB (Direct)";
                break;
            
            case '85':
                $data_type="[mtn] 4.5GB (Direct)";
                break;
            
            case '153':
                $data_type="[mtn] 6GB (Direct)";
                break;
            
            case '56':
                $data_type="[mtn] 10GB (Direct)";
                break;
            
            case '158':
                $data_type="[glo] 200MB (CG)";
                break;
            
            case '159':
                $data_type="[glo] 500MB (CG)";
                break;
            
            case '160':
                $data_type="[glo] 1GB (CG)";
                break;
            
            case '161':
                $data_type="[glo] 2GB (CG)";
                break;
            
            case '162':
                $data_type="[glo] 3GB (CG)";
                break;
            
            case '163':
                $data_type="[glo] 5GB (CG)";
                break;
            
            case '164':
                $data_type="[glo] 10GB (CG)";
                break;
            
            case '66':
                $data_type="[airtel] 750MB (Direct)";
                break;
            
            case '68':
                $data_type="[airtel] 2GB (Direct)";
                break;
            
            case '69':
                $data_type="[airtel] 3GB (Direct)";
                break;
            
            case '70':
                $data_type="[airtel] 4.5GB (Direct)";
                break;
            
            case '71':
                $data_type="[airtel] 6MB (Direct)";
                break;
            
            case '72':
                $data_type="[airtel] 10GB (Direct)";
                break;
            
            case '168':
                $data_type="[9mobile] 500MB (SME)";
                break;
            
            case '128':
                $data_type="[9mobile] 1GB (SME)";
                break;
            
            case '129':
                $data_type="[9mobile] 1.5GB (SME)";
                break;
            
            case '130':
                $data_type="[9mobile] 2GB (SME)";
                break;
            
            case '132':
                $data_type="[9mobile] 3GB (SME)";
                break;
            
            case '169':
                $data_type="[9mobile] 4GB (SME)";
                break;
            
            case '134':
                $data_type="[9mobile] 5GB (SME)";
                break;
            
            case '75':
                $data_type="[9mobile] 500MB (Direct)";
                break;
            
            case '76':
                $data_type="[9mobile] 1.5GB (Direct)";
                break;
            
            case '77':
                $data_type="[9mobile] 2GB (Direct)";
                break;
            
            case '78':
                $data_type="[9mobile] 3GB (Direct)";
                break;
            
            case '79':
                $data_type="[9mobile] 4.5GB (Direct)";
                break;
            
            case '80':
                $data_type="[9mobile] 11GB (Direct)";
                break;
            
            case '81':
                $data_type="[9mobile] 15GB (Direct)";
                break;
        }

        $actual_data_type=$data_type;
        $amount=substr($data["amount"],3);
        $amount=intval($amount);
        $actual_status = $status;

        if($status=="success"){
            $user_amount = $data["user_amount"];
            $present_user_balance = $user_amount-$amount;

            $stn = $this->pdo->prepare("UPDATE $this->table SET balance='$present_user_balance' WHERE email='$email'");
            $stn->execute();
        }


        $stn = $this->pdo->prepare("INSERT INTO $this->transaction_table (email, type, phone_number, name, data_type, amount, status) VALUES ('$email','$type','$phone_nuumber','$airtime_name','$actual_data_type','$amount', '$status')");
        $stn->execute();
        return $stn;
    }
}