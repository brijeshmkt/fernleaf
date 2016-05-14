<?php get_header(); ?>



<div class="content-outer-wrapper">

	<?php get_template_part( 'customform' ); ?>
	<?php
		// Check and get Sidebar Class
		global $sidebar;
		$sidebar = get_post_meta($post->ID,'page-option-sidebar-template',true);
		$sidebar_array = gdl_get_sidebar_size( $sidebar );
		if( $sidebar == 'no-sidebar' ){
			get_template_part('page', 'full');
		}else{
			get_template_part('page', 'normal');
		}
	?>
</div> <!-- content outer wrapper -->
<?php get_footer(); ?>

<?php
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

       $params = array(
                    'CountryCode' => 'SG',
					'CityCode' => 'SIN',
					'CheckIndate' => '2016-03-20',
					'CheckoutDate' => '2016-03-21',
					'RoomInfo' => array(
									array('NoAdult' => '2','NoChild' => '0', 'ChildAge' => array(0))
									),

					'InstantConfirmationOnly' => 'true'

                );


    //$result = $client->HelloWorld($params);
    $result = $client->SearchHotelsByDestV2($params);
    //var_dump($result);
	//print_r($result);
	//var_dump ($result->SearchHotelsByDestV2Result->any);
	//$var = get_object_vars($result);
	//print_r($var);

	$xml = simplexml_load_string($result->SearchHotelsByDestV2Result->any);
	var_dump( $xml->AT_HotelList);
	echo "<br /><br />";
	echo "1st Hotel Code = " . $xml->AT_HotelList->Hotel[0]->HotelCode . "<br />";
	echo "1st Hotel Name = " . $xml->AT_HotelList->Hotel[0]->HotelName;


?>