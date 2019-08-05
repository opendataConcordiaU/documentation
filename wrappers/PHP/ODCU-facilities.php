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
        // ensure spaces are changed to %20 to prevent error 400
        $start = ($start == '' ? date("Y-m-d%2000:00:00") : str_replace(" ", "%20", $start));
        $end = ($end == '' ? date("Y-m-d%20H:i:s") : str_replace(" ", "%20", $end));
        
        $url = $this->baseURL."environmental/filter/$start/$end";    
        $result = $this->query($url);
        return $result;
    }

    function consumption($start, $end){
        // ensure spaces are changed to %20 to prevent error 400
        $start = ($start == '' ? date("Y-m-d%2000:00:00") : str_replace(" ", "%20", $start));
        $end = ($end == '' ? date("Y-m-d%20H:i:s") : str_replace(" ", "%20", $end));
        
        $url = $this->baseURL."consumption/filter/$start/$end";    
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
            // TIME must be properly formated YYYY-MM-DD HH:MM:SS no verification made here  
            $startTime = (isset($_GET['start']) ? $_GET['start'] : '');        
            $endTime = (isset($_GET['end']) ? $_GET['end'] : '');
            echo $endpoint->environmental($startTime, $endTime);
            break;

        case 'consumption':           
            // TIME must be properly formated YYYY-MM-DD HH:MM:SS no verification made here  
            $startTime = (isset($_GET['start']) ? $_GET['start'] : '');
            $endTime = (isset($_GET['end']) ? $_GET['end'] : '');

            echo $endpoint->consumption($startTime, $endTime);
            break;
    }
}

?>
