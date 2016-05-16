Welcome to tours and travels list page

<p>List of all tours packages to be shown over here</p>

<a class="gdl-button large" href="/fernleaf/payment/" class="button">Book</a>

<hr>

<h1>Below data to be integrated with the design.  Below data means that api is working fine :-)</h1>
<?php
    print_r($_GET);

$destination = explode(",", $_GET['tour-destination']);

echo $CountryCode = $destination[0];
echo "<br>";
echo $CityCode = $destination[1];

$client  = new SoapClient('http://ws.asiatravel.net/PartnerPackageWSv2/ActivityWS.asmx?wsdl');

$header = new SoapHeader(
    'http://tempuri.org/',
    'SOAPHeaderAuth',
    array(
        'AgentCode' => 'fernleaf_xml2',
        'Password' => 'sales980',
        'Culture' => ''
    )
);
$client->__setSoapHeaders($header);

$params = array(
    'CountryCode' => 'SG',
    'CityCode' => 'SIN'
);

$result = $client->SearchActivityByDestination($params);
print_r($result);
//$xml = simplexml_load_string($result->SearchHotelByHotelIdV2Result->any);



?>