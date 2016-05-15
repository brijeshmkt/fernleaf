<?php
/*
  Template Name: API page
 */
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

get_header();

global $wpdb;

$postName = get_query_var('name');

switch ($postName) {
	case 'api-tour-packages':
		include('api/tour-packages.php');
        break;
}

?>

<?php
get_footer();
