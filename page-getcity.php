<?php
/*
  Template Name: getcity Page
 */
?>

<?php 
$pagePath = explode('/wp-content/', dirname(__FILE__));
include_once(str_replace('wp-content/', '', $pagePath[0] . '/wp-load.php'));
global $wpdb;

?>
<?php
//global $wpdb;
if(isset($_REQUEST['codeq']))
{
	
$countycode=$_REQUEST['codeq'];

$sql="SELECT * FROM fle_cities WHERE CountryISOCode='".$countycode."'";
$rows = $wpdb->get_results($sql);

foreach ($rows as $row) {
//echo $obj->name;
?>
				<option  value="<?php echo $row->CityCode; ?>"><?php echo $row->CityName; ?></option>
<?php } 

}

?> 