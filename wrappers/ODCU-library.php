<?php

class ODCU_library{

    private $userName = "YOUR USERID";
    private $password = "YOUR KEY";
    private $baseURL = "https://opendata.concordia.ca/API/v1/library/";

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
          //  var_dump($err);
            return false;
        } else {
            return $response;
        }
    } //function query(){
    
    function getOccupancy(){
        $url = $this->baseURL."occupancy/";
        $result = $this->query($url);
        return $result;
    }

    function computers(){
        $url = $this->baseURL."computers/";
        $result = $this->query($url);
        return $result;
    }

    function events(){
        $url = $this->baseURL."events/";
        $result = $this->query($url);
        return $result;
    }

    function hours($date){
        if($date != ''){
            $url = $this->baseURL."hours/$date";
        }else{
            $url = $this->baseURL."hours/".date('Y-m-d');
        }

        $result = $this->query($url);
        return $result;
    }

    function roomList(){
        $url = $this->baseURL."rooms/getRoomsList";
        $result = $this->query($url);
        return $result;
    }

    function reservations($rid,$sid){
        
    }

}


//make the class available in javacript

if(isset($_GET['action'])){

    $endpoint = new ODCU_library();
    switch ($_GET['action']){
        case 'occupancy':
            echo $endpoint->getOccupancy();
            break;
        
        case 'computers':
            echo $endpoint->computers();
            break;
        
        case 'events':
            echo $endpoint->events();
            break;

        case 'hours':           
            if(isset($_GET['date']) )
                // DATE must be properly formated YYYY-MM-DD no verification made here  
                echo $endpoint->hours($_GET['date']);
            else
                echo $endpoint->hours('');
            break;
        
        case 'rooms':
            echo $endpoint->roomList();
            break;
        
        case 'reservations':
            if(isset($_GET['rid']) and isset($_GET['sid']) ){
                echo $endpoint->roomList();
            }
            
            break;
    }
}

?>
