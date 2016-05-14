<?php
/*
  Template Name: Page result Page
 */
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

get_header();

global $wpdb;

$client  = new SoapClient('http://ws.asiatravel.net/HotelB2BAPI/atHotelsService.asmx?wsdl');

$header = new SoapHeader(
    'http://instantroom.com/',
    'SOAPHeaderAuthentication',
    array(
        'UserName' => 'b2bagent',
        'Password' => 'b2bagent',
        'Culture'=>'en-US'
    )
   );
$client->__setSoapHeaders($header);

// Define all variables
$CheckInDate = date("Y-m-d", strtotime($_GET['CheckIndate']));
$CheckOutDate = date("Y-m-d", strtotime($_GET['CheckoutDate']));
$NoAdult = $_GET['NoAdult'];
$cityname = $_GET['cityname'];

if (strpos($cityname, 'Hotel') == true) {

    $hotel_explode = explode(' - ',$cityname);

	$hotelName = $hotel_explode[0];

	$get_hotel=$wpdb->get_row("SELECT * FROM fle_hotels WHERE `hotelname` LIKE '$hotel_explode[0]'");

	$params = array(
    'HotelID' => $get_hotel->hotelId,
    'CheckInDate' => $CheckInDate,
    'CheckOutDate' => $CheckOutDate,
    'RoomInfo' => array(
    					array('NoAdult' => '2','NoChild' => '1', 'ChildAge' => array(0))
						),
    'InstantConfirmationOnly' => 'False'
	);

	$result = $client->SearchHotelByHotelIdV2($params);

	$xml = simplexml_load_string($result->SearchHotelByHotelIdV2Result->any);

	if(count($xml->AT_HotelList->Hotel) > 0){
		//check if value already existing in table if not then add value
		$hotel_count = $wpdb->get_var( "SELECT COUNT(*) FROM fle_search_hotel_name WHERE `hotel_name` LIKE '$hotelName' " );

		if($hotel_count == 0){
			//Insert values in fle_search_hotel_name table
			 $price = $xml->AT_HotelList->Hotel->AvgPrice;
			 $searchArray = array(
			 	'hotel_name' => $hotel_explode[0],
			 	'CheckIndate' => $CheckInDate,
			 	'CheckoutDate' => $CheckOutDate,
			 	'hotel_rooms' => $_GET['hotel_rooms'],
			 	'NoAdult' => $_GET['NoAdult'],
			 	'price' => $price
			 	);
			 $wpdb->insert( 'fle_search_hotel_name', $searchArray);
		}
		
	}

	//get_template_part( 'page', 'hotelDetail'); 
	include('page-hotelDetail.php');


}else{

	$hotel_explode = explode(' - ',$cityname);

	$cityName = trim($hotel_explode[0]);

	$mylink = $wpdb->get_row("select * from fle_cities where CityName LIKE '$cityName' ");

	$CountryCode = $mylink->CountryISOCode;
	$CityCode = $mylink->CityCode;
	$CheckIndate = date("Y-m-d", strtotime($_GET['CheckIndate']));
	$CheckoutDate = date("Y-m-d", strtotime($_GET['CheckoutDate']));
	$NoAdult = $_GET['NoAdult'];

	//echo "check in date is: " . $CheckIndate;


	$params = array(
	    'CountryCode' => $CountryCode,
	    'CityCode' => $CityCode,
	    'CheckIndate' => $CheckIndate,
	    'CheckoutDate' => $CheckoutDate,
	    'RoomInfo' => array(
	        array('NoAdult' => $NoAdult, 'NoChild' => '0', 'ChildAge' => array(0))
	    ),
	    'InstantConfirmationOnly' => 'true'
	);


$result = $client->SearchHotelsByDestV2($params);
//var_dump($result);

$xml = simplexml_load_string($result->SearchHotelsByDestV2Result->any);


	include('page-hotelList.php');
}

get_footer();
