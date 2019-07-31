<?php

class ODCU_courses{

    private $userName = "YOUR USERID";
    private $password = "YOUR KEY";
    private $baseURL = "https://opendata.concordia.ca/API/v1/course/";

    function query($url){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HEADER => 0,
        CURLOPT_USERPWD => $this->userName . ":" . $this->password
       
       
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            var_dump($err);
            return false;
        } else {
            return $response;
        }
    } //function query(){
    
    function getDescription($cid){
        $url = $this->baseURL."description/filter/$cid";
        $result = $this->query($url);
    }
}


//make the class available in javacript
if(isset($_GET['action'])){

    $endpoint = new ODCU_courses();
    switch ($_GET['action']){
        case 'description':
            if(isset($_GET['cid'])){
                echo $endpoint->getDescription($_GET['cid']);
            }
            break;
    }
}

?>
