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
    
    function getDescriptions($cid){
        $url = $this->baseURL."description/filter/$cid";
        $result = $this->query($url);
        return $result;
    }

    function getCatalog($sub, $cat, $car){
        $url = $this->baseURL."catalog/filter/$sub/$cat/$car";
        $result = $this->query($url);
        return $result;
    }

    function getSections($sub, $cat){
        $url = $this->baseURL."section/filter/$sub/$cat";
        $result = $this->query($url);
        return $result;
    }

    function getSchedules($cid, $sub, $cat){
        $url = $this->baseURL."schedule/filter/$cid/$sub/$cat";
        $result = $this->query($url);
        return $result;
    }

    function getSessions($car, $trm, $shn){
        $url = $this->baseURL."session/filter/$car/$trm/$shn";
        $result = $this->query($url);
        return $result;
    }

    function getFaculties($fac, $dep){
        $url = $this->baseURL."faculty/filter/$fac/$dep";
        $result = $this->query($url);
        return $result;
    }
}


//make the class available in javacript
if(isset($_GET['action'])){

    $endpoint = new ODCU_courses();
    switch ($_GET['action']){
        case 'description':
            if(isset($_GET['cid'])){
                echo $endpoint->getDescriptions($_GET['cid']);
            }
            break;

        case 'catalog':
            if(isset($_GET['sub']) and isset($_GET['cat']) and isset($_GET['car'])){
                echo $endpoint->getCatalog($_GET['sub'], $_GET['cat'], $_GET['car']);
            }
            break;

        case 'section':
            if(isset($_GET['sub']) and isset($_GET['cat'])){
                echo $endpoint->getSections($_GET['sub'], $_GET['cat']);
            }
            break;

        case 'schedule':
            if(isset($_GET['cid']) and isset($_GET['sub']) and isset($_GET['cat'])){
                echo $endpoint->getSchedules($_GET['cid'], $_GET['sub'], $_GET['cat']);
            }
            break;

        case 'session':
            if(isset($_GET['car']) and isset($_GET['trm']) and isset($_GET['shn'])){
                echo $endpoint->getSessions($_GET['car'], $_GET['trm'], $_GET['shn']);
            }
            break;

        case 'faculty':
             if(isset($_GET['fac']) and isset($_GET['dep'])){
                echo $endpoint->getFaculties($_GET['fac'], $_GET['dep']);
            }
            break;    
    }
}

?>
