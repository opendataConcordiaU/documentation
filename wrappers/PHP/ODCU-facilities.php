<?php

class ODCU_facilities{

    private $userName = "YOUR USERID";
    private $password = "YOUR KEY";
    private $baseURL = "https://opendata.concordia.ca/API/v1/facilities/";

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
    
    function getPointList(){
        $url = $this->baseURL."pointlist/";
        $result = $this->query($url);
        return $result;
    }

    function environmental($start, $end){
        if($start != '' and $end != ''){
            $start = str_replace(" ", "%20", $start);
            $end = str_replace(" ", "%20", $end);
            $url = $this->baseURL."environmental/filter/$start/$end";
        }else{
            $url = $this->baseURL."environmental/filter/".date("Y-m-d%2000:00:00")."/".date("Y-m-d%20H:i:s");
        }
        $result = $this->query($url);
        return $result;
    }

    function consumption($start, $end){
        if($start != '' and $end != ''){
            $start = str_replace(" ", "%20", $start);
            $end = str_replace(" ", "%20", $end);
            $url = $this->baseURL."consumption/filter/$start/$end";
        }else{
            $url = $this->baseURL."consumption/filter/".date("Y-m-d%2000:00:00")."/".date("Y-m-d%20H:i:s");
        }
        $result = $this->query($url);
        return $result;
    }

}


//make the class available in javacript
if(isset($_GET['action'])){

    $endpoint = new ODCU_facilities();
    switch ($_GET['action']){
        case 'pointlist':
            echo $endpoint->getPointList();
            break;

        case 'environmental':           
            if(isset($_GET['start']) and isset($_GET['end']) )
                // TIME must be properly formated YYYY-MM-DD HH:MM:SS no verification made here  
                echo $endpoint->environmental($_GET['start'], $_GET['end']);
            else
                echo $endpoint->environmental('', '');
            break;

        case 'consumption':           
            if(isset($_GET['start']) and isset($_GET['end']) )
                // TIME must be properly formated YYYY-MM-DD HH:MM:SS no verification made here  
                echo $endpoint->consumption($_GET['start'], $_GET['end']);
            else
                echo $endpoint->consumption('', '');
            break;
    }
}

?>
