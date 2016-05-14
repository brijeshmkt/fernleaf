<?php
/*
  Template Name: Page result Page
 */
?>

<?php 

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

?>
<!-- styles and js files are in header.php -->
<div class="main-content-container">
    <div class="row">
        <div class="three columns">
            <div class="left-panel">
                <div class="search-box">
                    <form name="frm" method="post" action="">
                        <h3>Quick Search</h3>
                        <!-- <div class="form-row">
                            <label>Destination:</label>
                            <select class="form-element">
                                <option value="">Singapore</option>
                                <option value="">India</option>
                                <option value="">United Kingdom</option>
                                <option value="">United Arab Emirates</option>
                            </select>
                        </div> -->
                        <div class="form-row">
                            <label>Select City:</label>
                            <select class="form-element">
                                <option value="">Singapore</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <label>Check-In:</label>
                            <div class="calendar-icon">
                                <input type="text" class="form-element hasDatepicker" value="<?php echo $CheckIndate;?>" name="CheckIndate" id="CheckIndate" title="Please select Check In date">
                                <img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt="">
                            </div>
<!--                            <select class="form-element-inline">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">10</option>
                                <option value="">11</option>
                                <option value="">12</option>
                            </select>
                            <select class="form-element-inline">
                                <option value="">Jan</option>
                                <option value="">Feb</option>
                                <option value="">Mar</option>
                                <option value="">Apr</option>
                                <option value="">May</option>
                                <option value="">Jun</option>
                                <option value="">Jul</option>
                                <option value="">Aug</option>
                                <option value="">Sep</option>
                                <option value="">Oct</option>
                                <option value="">Nov</option>
                                <option value="">Dec</option>
                            </select>
                            <select class="form-element-inline">
                                <option value="">2016</option>
                                <option value="">2017</option>
                                <option value="">2018</option>
                            </select>-->
                        </div>
                        <div class="form-row">
                            <label>Check-Out:</label>
                            <div class="calendar-icon">
                                <input type="text" class="form-element hasDatepicker" value="<?php echo $CheckoutDate;?>" name="CheckoutDate" id="CheckoutDate" title="Please select Check Out date" required="" aria-required="true">
                                <img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt="">
                            </div>
                        </div>
                        <div class="form-row-inline">
                            <label>Nights:</label>
                            <select class="form-element">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">10</option>
                                <option value="">11</option>
                                <option value="">12</option>
                            </select>
                        </div>
                        <div class="form-row-inline">
                            <label>Rooms:</label>
                            <select class="form-element">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">10</option>
                                <option value="">11</option>
                                <option value="">12</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <a class="gdl-button yellow-button large various">Show Availability</a>
                        </div>
                    </form>
                </div>
                <div class="display-results">
                    <label>Narrow Results:</label>
                    Displaying all of 222 hotels
                </div>
                <div class="hotel-name-srch">
                    <label>Hotel Name Contains</label>
                    <div class="hotel-name-srch-bar">
                        <input type="text" value="" placeholder="Hotel Name...">
                        <input type="submit" name="" value=">">
                    </div>
                </div>
                <div class="star-rating">
                    <label>Star Rating</label>
                    <div class="rating-box">
                        <label><input type="checkbox" name="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></label>
                        <label><input type="checkbox" name="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></label>
                        <label><input type="checkbox" name="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></label>
                        <label><input type="checkbox" name="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i></label>
                    </div>
                </div>
                <div class="select-location">
                    <label>Location</label>
                    <div class="locaiton-box">
                        <label><input type="checkbox" name="location"> Singapore</label>
                        <label><input type="checkbox" name="location"> Thailand</label>
                        <label><input type="checkbox" name="location"> Australia</label>
                        <label><input type="checkbox" name="location"> Bali</label>
                        <label><input type="checkbox" name="location"> Indonesia</label>
                    </div>
                </div>
                <div class="acco-type">
                    <label>Accomodation Type</label>
                    <div class="acco-type-box">
                        <label><input type="checkbox" name="accomodation"> Backpacker / Hostel</label>
                        <label><input type="checkbox" name="accomodation"> Boutique</label>
                        <label><input type="checkbox" name="accomodation"> Hotel</label>
                        <label><input type="checkbox" name="accomodation"> Resort</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="nine columns">
            <div class="right-panel">
                <div class="travel-details">
                    <h2>Singapore, Singapore</h2>
                    <div class="travel-srch-text">
                        <div class="stay-dates">Mon 18, Apr 2016 - Tue 19, Apr 2016,</div>
                        <div class="night-stay"><strong>1 Nights</strong></div>
                        <div class="room-wanted">1 Room</div>
                        <div class="adults-travel">1 Adult(s)</div>
                    </div>
                </div>
                <div class="sort-bar">
                    <label>Sort By:</label> <label><a href="#" class="active">Recommendation</a></label>&nbsp;|&nbsp;<label><a href="#">Hotel Name</a></label>&nbsp;|&nbsp;<label><a href="#">Price</a></label>
                </div>
                <!--<div class="discount-bar">
                    <label><span class="dollar">$</span> - 5% Cash Reward Hotel</label>
                    <label><span class="voucher">CV</span> - Applicable for Cash Voucher / Discount Code</label>
                </div>-->
                
                <!--Loping data start-->
                <div class="promo-box">Sales Promo - 10% OFF on Your Hotel Stay</div>
                <div class="srch-result-box">
                    <div class="picture-box">
                        <a href="#"><img src="http://fernleaf.coderadobe.com/wp-content/uploads/hotel-image.jpg" alt=""></a>
                    </div>
                    <div class="hotel-details-box">
                        <h3><a href="#">Moevenpick Heritage Hotel Sentosa</a> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></h3>
                        <div class="locaiton-map"><a href="#"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Sentosa Island</a></div>
                        <div class="hotel-amnities"><i class="fa fa-wifi"></i>&nbsp;&nbsp;Free Wi-Fi</div>
                        <div class="hotel-amnities"><i class="fa fa-camera"></i>&nbsp;&nbsp;Free City Tour</div>
                        <div class="hotel-amnities"><i class="fa fa-car"></i>&nbsp;&nbsp;Free Airport Transfer (Airport To Hotel)</div>
                    </div>
                    <div class="pricing-box">
                        <div class="best-deal-tag">Best Deal!</div>
                        <div class="strike-through">SGD 275.00</div>
                        <div class="offer-rate">SGD 247.00</div>
                        <div class="rate-of">average nightly rate</div>
                        <div class="book-now-btn">
                            <a href="" class="gdl-button large various">Book Now</a>
                            <span class="voucher">CV</span>
                        </div>
                        <!--<div class="reward-apply">
                            <label><span class="dollar">$</span> Cash Reward</label>
                        </div>-->
                    </div>
                </div>
                <div class="srch-result-box">
                    <div class="picture-box">
                        <a href="#"><img src="http://fernleaf.coderadobe.com/wp-content/uploads/hotel-image2.jpg" alt=""></a>
                    </div>
                    <div class="hotel-details-box">
                        <h3><a href="#">YMCA @ One Orchard</a> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></h3>
                        <div class="locaiton-map"><a href="#"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Orchard Vicinity</a></div>
                        <div class="hotel-amnities"><i class="fa fa-wifi"></i>&nbsp;&nbsp;Free Wi-Fi</div>
                        <div class="hotel-amnities"><i class="fa fa-camera"></i>&nbsp;&nbsp;Free City Tour</div>
                        <div class="hotel-amnities"><i class="fa fa-car"></i>&nbsp;&nbsp;Free Airport Transfer (Airport To Hotel)</div>
                    </div>
                    <div class="pricing-box">
                        <div class="best-deal-tag">Best Deal!</div>
                        <div class="normal-rate">SGD 110.00</div>
                        <div class="rate-of">average nightly rate</div>
                        <div class="book-now-btn">
                            <a href="" class="gdl-button large various">Book Now</a>
                            <span class="voucher">CV</span>
                        </div>
                        <!--<div class="reward-apply">
                            <label><span class="dollar">$</span> Cash Reward</label>
                        </div>-->
                    </div>
                </div>
                <!--Loping data end-->                
            </div>
        </div>
    </div>
</div>

<div class="clear"></div>

<?php var_dump( $xml->AT_HotelList); ?>
