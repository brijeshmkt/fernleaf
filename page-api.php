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
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php echo the_title(); ?>
	<?php echo the_content(); ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php
global $wpdb;
echo 'Hi';
die();
$postName = get_query_var('name');

switch ($postName) {
	case 'api-tour-packages':
		include('api/tour-packages.php');
        break;
	case 'api-flight':
		include('api/flight.php');
		break;
}

?>

<?php
get_footer();
