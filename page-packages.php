<?php
/*

Template Name: Package Page

*/

if($_GET['country'] == '')
{
	$country = 'SG';
} else {
	$country = $_GET['country'];
}

$count = 20;

$total = $wpdb->get_results( 'SELECT * FROM activity WHERE ImagePath is not null AND PriceAdult > 0 AND Country = "'.$country.'"' );

$total_size = sizeof($total);

$pages2 = ceil($total_size/$count);


if($_GET['start'] == '')
{
	$start = 0*$count;	
	$start_c = 1;
} else {
	$start = ($_GET['start']-1)*$count;	
	$start_c = $_GET['start'];
	
}

$results = $wpdb->get_results( 'SELECT * FROM activity WHERE ImagePath is not null AND PriceAdult > 0 AND Country = "'.$country.'" LIMIT '.$start.','.$count );

 get_header(); ?>

<div class="content-outer-wrapper">
  <div class="page-full-wrapper">
    <div id="post-9" class="post-9 page type-page status-publish hentry">
      <div class="page-wrapper single-page ">
        <div class="gdl-page-item">
          <div class="container">
            <div class="row">
              <div class="twelve columns mb0">
                <div class="gdl-page-content"></div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="twelve columns package-item-class package-item-class-0 mb40">
                <div class="package-item-holder">
                  <div class="row">
                  <?php foreach($results as $count=>$r): ?>
                  
				  
                    <div class="six columns gdl-package-widget">
                      <div class="package-content-wrapper">
                        <div class="package-media-wrapper gdl-image"><a href="<?php echo get_site_url(); ?>/checkout/?activity_id=<?php echo $r->ActivityID; ?>"><img src="<?php echo $r->ImagePath; ?>" alt="" width="300">
                          <div class="package-ribbon-wrapper">
                            
                            <div class="clear"></div>
                          </div>
                          </a></div>
                        <h2 class="package-title"><a href="<?php echo get_site_url(); ?>/checkout/?activity_id=<?php echo $r->ActivityID; ?>">
						<?php echo utf8_decode($r->ActivityName); ?>
                        </a></h2>
                        <div class="package-content"><?php echo $r->ActivityInclusive; ?></div>
                        
                        <a class="package-book-now-button gdl-button large various" href="<?php echo get_site_url(); ?>/checkout/?activity_id=<?php echo $r->ActivityID; ?>" >Book Now!</a>
                        <div class="package-info"><i class="icon-tag"></i><span class="package-price">From S$<?php echo number_format($r->PriceAdult,2); ?> Per Pax</span></div>
                        <div class="clear"></div>
                      </div>
                    </div>
                    
                    <?php if($count%2 == 1): ?>
                    	<br clear="all">
                    <?php endif; ?>
                    
                    <?php endforeach; ?>
                    
                    
                    <div class="clear"></div>
                  </div>
                </div>
                <div class="clear"></div>
                <div class="gdl-pagination">
                <?php for($ia=1;$ia<=$pages2;$ia++): ?>
                
                <?php if($ia == $start_c): ?>
                 <span class="current"><?php echo $start_c; ?></span>
                 
                <?php else: ?>
                <a href="<?php echo get_site_url(); ?>/package-tours/?start=<?php echo $ia; ?>&country=<?php echo $country; ?>"><?php echo $ia; ?></a>
                <?endif; ?>
                
                
                <?php endfor; ?>
                
                  <div class="clear"></div>
                </div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <!-- gdl page item -->
        <div class="clear"></div>
      </div>
      <!-- page wrapper --> 
    </div>
    <!-- post class --> 
  </div>
</div>
<!-- content outer wrapper -->
<?php get_footer(); ?>
