<?php
/*
  Template Name: Page tours&attractions Page
 */
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('api-config.php');
global $wpdb;

// get_header(); 
//print_r($_GET);

//echo $person = $_GET['person'];
$destination = explode(",", $_GET['tour-destination']);

echo $CountryCode = $destination[0];
echo "<br>";
echo $CityCode = $destination[1];

$client  = new SoapClient('http://ws.asiatravel.net/PartnerPackageWSv2/ActivityWS.asmx?wsdl');

$header = new SoapHeader(
    'http://instantroom.com/',
    'SOAPHeaderAuthentication',
    array(
        'AgentCode'=> 'Test',
        'PartnerID' => '0',
        'UserName' => 'b2bagent',
        'Password' => 'b2bagent',
        'Culture'=>'en-US'
    )
   );
$client->__setSoapHeaders($header);

$params = array(
    'CountryCode' => 'SG'
    );


    $result = $client->SearchActivityByDestination($params);
    print_r($result);
    //$xml = simplexml_load_string($result->SearchHotelByHotelIdV2Result->any);


?>

<?php get_header(); ?>

<div class="content-outer-wrapper">
    <div class="container">
        <div class="row">
            Hello Brijesh
        </div>
    </div>
</div>

<?php get_footer(); ?>