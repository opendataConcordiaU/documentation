# Concordia University Open Data API

## Getting Started

### Obtaining Your API Key 
In order to use Concordia’s open data API, you will need to [register for a developer account](https://opendata.concordia.ca/admin/register.php). Registration is free and takes very little time. All you need is a valid email address in order to verify your identity. After creating and verifying your account, you will then need to create an application. Applications are what will provide you with the user id and key needed to query data through the API. You can create dedicated applications for each of your projects. Quotas are enforced for each individual application and not at the user level.

To create an application simply go to My Applications and click on Create Application button. You will see a new application added to your list.

![create application screen](img/gs-01.jpg)

After the application is created, click on the link to change the title and add an optional description. This screen will also display the credentials necessary for you to use the API. Please note in the example below, how the credentials are mapped to a postman call.

![edit application screen](img/gs-02.jpg)

### Authentication
The API use [basic authentication](https://en.wikipedia.org/wiki/Basic_access_authentication) over https. Here is example of a cURL call in PHP

```PHP
$APIUSER = “”; //user value from your application
$APIKEY = “”; //Api key value from your application

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL = $url,
    CURLOPT_RETURNTRANSFER = true,
    CURLOPT_ENCODING = "",
    CURLOPT_MAXREDIRS = 10,
    CURLOPT_TIMEOUT = 30,
    CURLOPT_HTTP_VERSION = CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST = "GET",
    CURLOPT_SSL_VERIFYHOST = 0,
    CURLOPT_SSL_VERIFYPEER = 0,
    CURLOPT_HEADER = 0,
    CURLOPT_USERPWD = $APIUSER . ":" . $APIKEY
    ));

$response = curl_exec($curl);
```
### Quotas
Initially we have set a limit of 10,000 calls per application per day. After the quota is reached, the API will fail to authenticate application. If you need more quota please contact us at help@concordia.ca

### Examples and Wrappers
Our github repository contains some examples and API wrappers written in different languages that we hope will grow with contributions from our community. If you would like to contribute please send your request to help@concordia.ca