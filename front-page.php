<?php get_header(); 
error_reporting(0);

global $wpdb;

$type = 'package';
$args=array(
  'post_type' => $type,
  'package-category'=>'tours',
  'post_status' => 'publish',
  'posts_per_page' => 4,
  'caller_get_posts'=> 1);
$my_query = null;
$my_query = new WP_Query($args);


$args1=array(
  'post_type' => $type,
  'package-category'=>'free-easy',
  'post_status' => 'publish',
  'posts_per_page' => 4,
  'caller_get_posts'=> 1);
$my_query1 = null;
$my_query1 = new WP_Query($args1);


$args2=array(
  'post_type' => $type,
  'package-category'=>'weekend',
  'post_status' => 'publish',
  'posts_per_page' => 4,
  'caller_get_posts'=> 1);
$my_query2 = null;
$my_query2 = new WP_Query($args2);


$search_hotel_names = $wpdb->get_results( 'SELECT * FROM fle_search_hotel_name' , OBJECT );

?>
<style type="text/css">
#ui-id-1
{
    height: 300px;
    overflow: scroll;
}
</style>
<div class="form-slider">
    <div class="row">
        <div class="twelve columns">
            <div class="row">
                <div class="eight columns">
                    <div id="verticalTab">
                        <ul class="resp-tabs-list">
                            <li class="flights"><i class="icon-plane"></i> Flights</li>
                            <li class="hotels"><i class="icon-building"></i> Hotels</li>
                            <li class="tours"><i class="icon-globe"></i> Tours &amp; Attractions</li>
                            <li class="allpackage"><span>Click here to book a combo<br>and save more!</span></li>
                        </ul>
                        <div class="resp-tabs-container">
                            <div>
                                <div class="form-elements-holder">
                                    <form id="search-flight-form" name="search-flight-form" method="post" action="">
                                        <div class="row">
                                            <div class="twelve columns radiobtns">
                                                <label><input type="radio" name="flights-type" checked="" value="Return" id="return"> Return</label>
                                                <label><input type="radio" name="flights-type" value="Oneway" id="oneway"> Oneway</label>
                                                <label><input type="radio" name="flights-type" value="Multistop" id="multistop"> Multi Stop</label>
                                            </div>
                                        </div>
                                        <div class="row multistop">
                                            <div class="six columns">
                                                <label class="form-label">Departure City:</label>
                                                <input type="text" class="form-control departure_city" value="" name="departure_city[]" id="departure_city">
                                            </div>
                                            <div class="six columns">
                                                <label class="form-label">Arrival City:</label>
                                                <input type="text" class="form-control arrival_city" value="" name="arrival_city[]" id="arrival_city">
                                            </div>
                                            <div class="clear"></div>
                                            <div class="six columns">
                                                <label class="form-label">Departure Date:</label><div class="calendar-icon">
                                                <input type="text" class="form-control departure_date" value="" name="departure_date[]" id="departure_date"><img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt=""></div>
                                            </div>
                                            <div class="six columns" id="arrival_date_div">
                                                <label class="form-label">Arrival Date:</label><div class="calendar-icon">
                                                <input type="text" class="form-control arrival_date" value="" name="arrival_date[]" id="arrival_date"><img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt=""></div>
                                            </div>

                                            <div class="clear"></div>
                                            <hr>
                                        </div>
                                        
                                        <div class="twelve columns" id="addmore" style="display: none;">
                                                <a href="#" class="gdl-button yellow-button small various">Add More</a>
                                        </div>
                                        <div class="row">
                                            <div class="twelve columns">
                                                <div class="row">
                                                    <div class="four columns">
                                                        <label class="form-label">Class</label><select class="form-control">
                                                            <option value="Economy">Economy</option>
                                                            <option value="Premium">Premium</option>
                                                            <option value="Business">Business</option>
                                                            <option value="First">First</option>
                                                        </select>
                                                    </div>
                                                    <div class="four columns">
                                                        <label class="form-label">Adult</label><select class="form-control">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <div class="four columns">
                                                        <label class="form-label">Child</label><select class="form-control">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="twelve columns"><a href="javascript:void(0);" id="flight-search-btn" class="gdl-button yellow-button large various">Show Availability!</a></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div>
                                <div class="form-elements-holder">
                                    <form id="search-main-form" name="search-main-form">
                                        <div class="row">
                                            <div class="twelve columns">
                                                <label class="form-label">Hotel Name:</label>
                                                <input type="text" name="cityname" id="cityname" class="form-control" value="" title="City name required" placeholder="Enter city name / Hotel Name" required=""><br>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="six columns">
                                                <label class="form-label">CheckIn Date:</label><div class="calendar-icon">
                                                    <input type="text" class="form-control" value="" name="CheckIndate" id="CheckIndate" title="Please select Check In date">
                                                    <img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt=""></div>
                                            </div>
                                            <div class="six columns">
                                                <label class="form-label">CheckOut Date:</label><div class="calendar-icon">
                                                    <input type="text" class="form-control" value="" name="CheckoutDate" id="CheckoutDate" placeholder="" required=""><img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="twelve columns">
                                                <div class="row">
                                                    <div class="four columns">
                                                        <label class="form-label">Rooms</label>
                                                        <select name="hotel_rooms" id="hotel_rooms" class="form-control">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </div>
                                                    <div class="four columns">
                                                        <label class="form-label">Adults Per Room</label>
                                                        <select name="NoAdult" id="NoAdult" class="form-control">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="twelve columns">
                                                <a id="hotel-search-btn" class="gdl-button yellow-button large various">Search Hotels Now</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div>
                                <div class="form-elements-holder">
                                    <form id="search-tours-form" name="frm2" method="post" action="">
                                        <div class="row">
                                            <div class="twelve columns">
                                                <div class="row">
                                                    <div class="seven columns">
                                                        <label class="form-label">Select Your Destination</label>
                                                        <select class="goSelect width335" id="tour-destination" 
                                                        name="tour-destination">
                                                        <option value="0">Select Destination</option>
                                                        <optgroup label="Argentina" name="AR" class="cnopt">
                                                            <option value="AR,BUE" class="ctopt">Buenos Aires</option>
                                                            <option value="AR,FTE" class="ctopt">El Calafate</option>
                                                            <option value="AR,USH" class="ctopt">Ushuaia</option>
                                                        </optgroup>
                                                        <optgroup label="Australia" name="AU" class="cnopt"><option value="AU,ADL" class="ctopt">Adelaide</option><option value="AU,BNE" class="ctopt">Brisbane</option><option value="AU,MEL" class="ctopt">Melbourne (AU)</option><option value="AU,PER" class="ctopt">Perth</option><option value="AU,SYD" class="ctopt">Sydney (AU)</option></optgroup><optgroup label="Austria" name="AT" class="cnopt"><option value="AT,SZG" class="ctopt">Salzburg</option><option value="AT,VIE" class="ctopt">Vienna</option></optgroup><optgroup label="Barbados" name="BB" class="cnopt"><option value="BB,BGI" class="ctopt">Barbados</option></optgroup><optgroup label="Belgium" name="BE" class="cnopt"><option value="BE,BRU" class="ctopt">Brussels</option></optgroup><optgroup label="Brazil" name="BR" class="cnopt"><option value="BR,MAO" class="ctopt">Manaus</option><option value="BR,RIO" class="ctopt">Rio de Janeiro</option><option value="BR,SSA" class="ctopt">Salvador</option></optgroup><optgroup label="Brunei Darussalam" name="BN" class="cnopt"><option value="BN,BWN" class="ctopt">Brunei</option></optgroup><optgroup label="Cambodia" name="KH" class="cnopt"><option value="KH,PNH" class="ctopt">Phnom Penh</option><option value="KH,REP" class="ctopt">Siem Reap</option><option value="KH,KOS" class="ctopt">Sihanoukville</option></optgroup><optgroup label="Canada" name="CA" class="cnopt"><option value="CA,YYC" class="ctopt">Calgary</option><option value="CA,YHZ" class="ctopt">Halifax</option><option value="CA,YMQ" class="ctopt">Montreal</option><option value="CA,NIA" class="ctopt">Niagara Falls</option><option value="CA,YQB" class="ctopt">Quebec</option><option value="CA,YVR" class="ctopt">Vancouver</option><option value="CA,YYJ" class="ctopt">Victoria (CA)</option></optgroup><optgroup label="Cayman Islands" name="KY" class="cnopt"><option value="KY,GCM" class="ctopt">Grand Cayman Island</option></optgroup><optgroup label="China" name="CN" class="cnopt"><option value="CN,BJS" class="ctopt">Beijing</option><option value="CN,CAN" class="ctopt">Guangzhou</option><option value="CN,KWL" class="ctopt">Guilin</option><option value="CN,SHA" class="ctopt">Shanghai</option><option value="CN,SIA" class="ctopt">Xi An</option></optgroup><optgroup label="Croatia" name="HR" class="cnopt"><option value="HR,DBV" class="ctopt">Dubrovnik</option><option value="HR,SPU" class="ctopt">Split</option></optgroup><optgroup label="Czech Republic" name="CZ" class="cnopt"><option value="CZ,PRG" class="ctopt">Prague</option></optgroup><optgroup label="Denmark" name="DK" class="cnopt"><option value="DK,CPH" class="ctopt">Copenhagen</option></optgroup><optgroup label="Dominican Republic" name="DO" class="cnopt"><option value="DO,LRM" class="ctopt">La Romana</option><option value="DO,POP" class="ctopt">Puerto Plata</option><option value="DO,PUJ" class="ctopt">Punta Cana</option><option value="DO,SDQ" class="ctopt">Santo Domingo (DO)</option></optgroup><optgroup label="France" name="FR" class="cnopt"><option value="FR,AVN" class="ctopt">Avignon</option><option value="FR,BOD" class="ctopt">Bordeaux</option><option value="FR,MRS" class="ctopt">Marseille</option><option value="FR,NCE" class="ctopt">Nice</option><option value="FR,PAR" class="ctopt">Paris</option></optgroup><optgroup label="Germany" name="DE" class="cnopt"><option value="DE,BER" class="ctopt">Berlin</option><option value="DE,FRA" class="ctopt">Frankfurt</option><option value="DE,MUC" class="ctopt">Munich</option></optgroup><optgroup label="Greece" name="GR" class="cnopt"><option value="GR,ATH" class="ctopt">Athens (GR)</option></optgroup><optgroup label="Hong Kong (sar) China" name="HK" class="cnopt"><option value="HK,HKG" class="ctopt">Hong Kong</option></optgroup><optgroup label="Hungary" name="HU" class="cnopt"><option value="HU,BUD" class="ctopt">Budapest</option></optgroup><optgroup label="Iceland" name="IS" class="cnopt"><option value="IS,REK" class="ctopt">Reykjavik</option></optgroup><optgroup label="India" name="IN" class="cnopt"><option value="IN,AGR" class="ctopt">Agra</option><option value="IN,AMD" class="ctopt">Ahmedabad</option><option value="IN,BLR" class="ctopt">Bangalore</option><option value="IN,MAA" class="ctopt">Chennai</option><option value="IN,GOI" class="ctopt">Goa</option><option value="IN,HYD" class="ctopt">Hyderabad</option><option value="IN,JAI" class="ctopt">Jaipur</option><option value="IN,COK" class="ctopt">Kochi (IN)</option><option value="IN,CCU" class="ctopt">Kolkata</option><option value="IN,BOM" class="ctopt">Mumbai</option><option value="IN,DEL" class="ctopt">New Delhi</option><option value="IN,TRV" class="ctopt">Thiruvananthapuram</option></optgroup><optgroup label="Indonesia" name="ID" class="cnopt"><option value="ID,BDO" class="ctopt">Bandung</option><option value="ID,BTH" class="ctopt">Batam</option><option value="ID,ID6" class="ctopt">Bintan</option><option value="ID,DPS" class="ctopt">Denpasar Bali</option><option value="ID,LOP" class="ctopt">Lombok(Mataram)</option><option value="ID,MLG" class="ctopt">Malang</option><option value="ID,SUB" class="ctopt">Surabaya</option><option value="ID,JOG" class="ctopt">Yogyakarta</option></optgroup><optgroup label="Ireland Republic of" name="IE" class="cnopt"><option value="IE,DUB" class="ctopt">Dublin</option></optgroup><optgroup label="Israel" name="IL" class="cnopt"><option value="IL,TLV" class="ctopt">Tel Aviv</option></optgroup><optgroup label="Italy" name="IT" class="cnopt"><option value="IT,FLR" class="ctopt">Florence (IT)</option><option value="IT,MIL" class="ctopt">Milan</option><option value="IT,NAP" class="ctopt">Naples (IT)</option><option value="IT,ROM" class="ctopt">Rome</option><option value="IT,VCE" class="ctopt">Venice</option></optgroup><optgroup label="Japan" name="JP" class="cnopt"><option value="JP,UKY" class="ctopt">Kyoto</option><option value="JP,TYO" class="ctopt">Tokyo</option></optgroup><optgroup label="Korea (South)" name="KR" class="cnopt"><option value="KR,SEL" class="ctopt">Seoul</option></optgroup><optgroup republic'="" democratic="" s="" label="Lao People" name="LA" class="cnopt"><option value="LA,LPQ" class="ctopt">Luang Prabang</option><option value="LA,VTE" class="ctopt">Vientiane</option></optgroup><optgroup label="Macao (sar) China" name="MO" class="cnopt"><option value="MO,MFM" class="ctopt">Macau</option></optgroup><optgroup label="Malaysia" name="MY" class="cnopt"><option value="MY,GTB" class="ctopt">Genting Highlands</option><option value="MY,IPH" class="ctopt">Ipoh</option><option value="MY,JHB" class="ctopt">Johor Bahru</option><option value="MY,BKI" class="ctopt">Kota Kinabalu</option><option value="MY,KUL" class="ctopt">Kuala Lumpur</option><option value="MY,KCH" class="ctopt">Kuching</option><option value="MY,LGK" class="ctopt">Langkawi</option><option value="MY,MY3" class="ctopt">Malacca</option><option value="MY,MYY" class="ctopt">Miri</option><option value="MY,PEN" class="ctopt">Penang</option><option value="MY,SDK" class="ctopt">Sandakan</option></optgroup><optgroup label="Mexico" name="MX" class="cnopt"><option value="MX,CUN" class="ctopt">Cancun</option><option value="MX,CZM" class="ctopt">Cozumel</option><option value="MX,MEX" class="ctopt">Mexico City</option><option value="MX,PVR" class="ctopt">Puerto Vallarta</option></optgroup><optgroup label="Monaco" name="MC" class="cnopt"><option value="MC,MCM" class="ctopt">Monte Carlo</option></optgroup><optgroup label="Morocco" name="MA" class="cnopt"><option value="MA,RAK" class="ctopt">Marrakech</option></optgroup><optgroup label="Myanmar" name="MM" class="cnopt"><option value="MM,BPE" class="ctopt">Bagan</option><option value="MM,MM7" class="ctopt">Inle Lake</option><option value="MM,MDL" class="ctopt">Mandalay</option><option value="MM,MM4" class="ctopt">Nyaung Shwe</option><option value="MM,RGN" class="ctopt">Yangon</option></optgroup><optgroup label="Nepal" name="NP" class="cnopt"><option value="NP,KTM" class="ctopt">Kathmandu</option><option value="NP,PKR" class="ctopt">Pokhara</option></optgroup><optgroup label="Netherlands" name="NL" class="cnopt"><option value="NL,AMS" class="ctopt">Amsterdam</option></optgroup><optgroup label="New Zealand" name="NZ" class="cnopt"><option value="NZ,AKL" class="ctopt">Auckland</option><option value="NZ,CHC" class="ctopt">Christchurch</option><option value="NZ,ZQN" class="ctopt">Queenstown</option><option value="NZ,ROT" class="ctopt">Rotorua</option><option value="NZ,WLG" class="ctopt">Wellington</option></optgroup><optgroup label="Panama" name="PA" class="cnopt"><option value="PA,PTY" class="ctopt">Panama City (PA)</option></optgroup><optgroup label="Philippines" name="PH" class="cnopt"><option value="PH,EUQ" class="ctopt">Antique</option><option value="PH,BCD" class="ctopt">Bacolod</option><option value="PH,BAG" class="ctopt">Baguio</option><option value="PH,BQA" class="ctopt">Baler</option><option value="PH,P31" class="ctopt">Bataan</option><option value="PH,PH2" class="ctopt">Batanes</option><option value="PH,PH3" class="ctopt">Batangas</option><option value="PH,PH4" class="ctopt">Bohol</option><option value="PH,PH5" class="ctopt">Boracay</option><option value="PH,P42" class="ctopt">Bulacan</option><option value="PH,CGY" class="ctopt">Cagayan de Oro</option><option value="PH,CYP" class="ctopt">Calbayog</option><option value="PH,PP3" class="ctopt">Camarines Norte</option><option value="PH,P43" class="ctopt">Camarines Sur</option><option value="PH,CGM" class="ctopt">Camiguin</option><option value="PH,CEB" class="ctopt">Cebu</option><option value="PH,P75" class="ctopt">Compostela Valley</option><option value="PH,USU" class="ctopt">Coron</option><option value="PH,CBO" class="ctopt">Cotabato</option><option value="PH,DVO" class="ctopt">Davao</option><option value="PH,DGT" class="ctopt">Dumaguete</option><option value="PH,GES" class="ctopt">General Santos</option><option value="PH,P10" class="ctopt">Ilocos Norte</option><option value="PH,P11" class="ctopt">Ilocos Sur</option><option value="PH,ILO" class="ctopt">Iloilo</option><option value="PH,P45" class="ctopt">Isabela</option><option value="PH,P76" class="ctopt">Kalinga</option><option value="PH,PH9" class="ctopt">La Union</option><option value="PH,LAG" class="ctopt">Laguna</option><option value="PH,LAO" class="ctopt">Laoag</option><option value="PH,LGP" class="ctopt">Legazpi</option><option value="PH,MNL" class="ctopt">Manila</option><option value="PH,MRQ" class="ctopt">Marinduque</option><option value="PH,P54" class="ctopt">Mindoro</option><option value="PH,WNP" class="ctopt">Naga</option><option value="PH,P57" class="ctopt">Negros Occidental</option><option value="PH,P60" class="ctopt">Nueva Vizcaya</option><option value="PH,P17" class="ctopt">Palawan</option><option value="PH,P18" class="ctopt">Pampanga</option><option value="PH,P19" class="ctopt">Pangasinan</option><option value="PH,P21" class="ctopt">Puerto Galera</option><option value="PH,P65" class="ctopt">Quezon</option><option value="PH,P66" class="ctopt">Quirino</option><option value="PH,P23" class="ctopt">Rizal</option><option value="PH,TBH" class="ctopt">Romblon</option><option value="PH,P67" class="ctopt">Samar</option><option value="PH,P26" class="ctopt">Siargao</option><option value="PH,SIQ" class="ctopt">Siquijor</option><option value="PH,PP2" class="ctopt">Sorsogon</option><option value="PH,SFS" class="ctopt">Subic</option><option value="PH,SUG" class="ctopt">Surigao</option><option value="PH,TAC" class="ctopt">Tacloban</option><option value="PH,P32" class="ctopt">Tagaytay</option><option value="PH,P27" class="ctopt">Tarlac</option><option value="PH,TUG" class="ctopt">Tuguegarao</option><option value="PH,VRC" class="ctopt">Virac</option><option value="PH,ZAM" class="ctopt">Zamboanga</option></optgroup><optgroup label="Poland" name="PL" class="cnopt"><option value="PL,KRK" class="ctopt">Krakow</option></optgroup><optgroup label="Portugal" name="PT" class="cnopt"><option value="PT,LIS" class="ctopt">Lisbon</option><option value="PT,OPO" class="ctopt">Porto</option></optgroup><optgroup label="Puerto Rico" name="PR" class="cnopt"><option value="PR,SJU" class="ctopt">San Juan (PR)</option></optgroup><optgroup label="Russian Federation" name="RU" class="cnopt"><option value="RU,MOW" class="ctopt">Moscow</option><option value="RU,LED" class="ctopt">St Petersburg</option></optgroup><optgroup label="Singapore" name="SG" class="cnopt"><option value="SG,SIN" class="ctopt">Singapore</option></optgroup><optgroup label="South Africa" name="ZA" class="cnopt"><option value="ZA,CPT" class="ctopt">Cape Town</option><option value="ZA,JNB" class="ctopt">Johannesburg</option></optgroup><optgroup label="Spain" name="ES" class="cnopt"><option value="ES,BCN" class="ctopt">Barcelona (ES)</option><option value="ES,GRX" class="ctopt">Granada</option><option value="ES,MAD" class="ctopt">Madrid</option><option value="ES,AGP" class="ctopt">Malaga</option><option value="ES,PMI" class="ctopt">Palma Mallorca</option><option value="ES,SVQ" class="ctopt">Seville</option><option value="ES,TCI" class="ctopt">Tenerife</option><option value="ES,VLC" class="ctopt">Valencia (ES)</option></optgroup><optgroup label="Sweden" name="SE" class="cnopt"><option value="SE,STO" class="ctopt">Stockholm</option></optgroup><optgroup label="Switzerland" name="CH" class="cnopt"><option value="CH,GVA" class="ctopt">Geneva</option><option value="CH,ZRH" class="ctopt">Zurich</option></optgroup><optgroup label="Taiwan" name="TW" class="cnopt"><option value="TW,TPE" class="ctopt">Taipei</option></optgroup><optgroup label="Thailand" name="TH" class="cnopt"><option value="TH,BKK" class="ctopt">Bangkok</option><option value="TH,CNX" class="ctopt">Chiang Mai</option><option value="TH,HHQ" class="ctopt">Hua Hin</option><option value="TH,TH7" class="ctopt">Khao Lak</option><option value="TH,USM" class="ctopt">Koh Samui</option><option value="TH,KBV" class="ctopt">Krabi</option><option value="TH,PYX" class="ctopt">Pattaya</option><option value="TH,HKT" class="ctopt">Phuket</option></optgroup><optgroup label="Turkey" name="TR" class="cnopt"><option value="TR,IST" class="ctopt">Istanbul</option><option value="TR,IZM" class="ctopt">Izmir</option></optgroup><optgroup label="United Arab Emirates" name="AE" class="cnopt"><option value="AE,AUH" class="ctopt">Abu Dhabi</option><option value="AE,FJR" class="ctopt">Al-Fujairah</option><option value="AE,DXB" class="ctopt">Dubai</option><option value="AE,RKT" class="ctopt">Ras al Khaimah</option><option value="AE,SHJ" class="ctopt">Sharjah</option></optgroup><optgroup label="United Kingdom" name="GB" class="cnopt"><option value="GB,EDI" class="ctopt">Edinburgh</option><option value="GB,LON" class="ctopt">London (GB)</option></optgroup><optgroup label="United States" name="US" class="cnopt"><option value="US,ANA" class="ctopt">Anaheim</option><option value="US,AUS" class="ctopt">Austin</option><option value="US,BOS" class="ctopt">Boston</option><option value="US,CHI" class="ctopt">Chicago</option><option value="US,DEN" class="ctopt">Denver</option><option value="US,HNL" class="ctopt">Honolulu</option><option value="US,HOU" class="ctopt">Houston</option><option value="US,OGG" class="ctopt">Kahului</option><option value="US,EYW" class="ctopt">Key West</option><option value="US,KOA" class="ctopt">Kona</option><option value="US,LAS" class="ctopt">Las Vegas</option><option value="US,LAX" class="ctopt">Los Angeles</option><option value="US,MIA" class="ctopt">Miami</option><option value="US,MSY" class="ctopt">New Orleans</option><option value="US,NYC" class="ctopt">New York</option><option value="US,ORL" class="ctopt">Orlando</option><option value="US,PHL" class="ctopt">Philadelphia</option><option value="US,PHX" class="ctopt">Phoenix</option><option value="US,PDX" class="ctopt">Portland (US) OR</option><option value="US,SAT" class="ctopt">San Antonio (US)</option><option value="US,SAN" class="ctopt">San Diego</option><option value="US,SFO" class="ctopt">San Francisco</option><option value="US,SEA" class="ctopt">Seattle</option><option value="US,TPA" class="ctopt">Tampa</option><option value="US,WAS" class="ctopt">Washington</option></optgroup><optgroup label="Vietnam" name="VN" class="cnopt"><option value="VN,VN1" class="ctopt">Can Tho</option><option value="VN,DAD" class="ctopt">Da Nang</option><option value="VN,DLI" class="ctopt">Dalat</option><option value="VN,VN4" class="ctopt">Halong</option><option value="VN,HAN" class="ctopt">Hanoi</option><option value="VN,SGN" class="ctopt">Ho Chi Minh City</option><option value="VN,VN5" class="ctopt">Hoi An</option><option value="VN,HUI" class="ctopt">Hue</option><option value="VN,NHA" class="ctopt">Nha Trang</option><option value="VN,VN6" class="ctopt">Phan Thiet</option><option value="VN,PQC" class="ctopt">Phuquoc</option><option value="VN,VN8" class="ctopt">Vung Tau</option></optgroup></select>
                                                    </div>
                                                    <div class="five columns">
                                                        <label class="form-label">Persons</label><input type="text" class="form-control" value="" name="person">
                                                    </div>
                                                    <div class="twelve columns"><a href="javascript:void(0);" id="tours-search-btn" class="gdl-button yellow-button large various">Show Availability!</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div>
                                <div class="form-elements-holder">
                                    <form name="frm3" method="post" action="">
                                        <div class="row">
                                            <div class="twelve columns radiobtns">
                                                <label><input type="radio" name="additonal_savings" checked="" value="All" id="flights_hotel_tours"> Flights + Hotels + Tours</label><label><input type="radio" name="additonal_savings" value="Flights+Hotels" id="flights_hotel"> Flights + Hotels</label><label><input type="radio" name="additonal_savings" id="hotel_tours" value="Hotels+Tours"> Hotels + Tours</label>
                                            </div>
                                        </div>
                                        <div class="flights_hotel_tours">
                                            <div class="row">
                                                <div class="six columns">
                                                    <label class="form-label">Departure City:</label><input type="text" class="form-control" value="" name="departure_city" id="fdeparture_city">
                                                </div>
                                                <div class="six columns">
                                                    <label class="form-label">Arrival City:</label><input type="text" class="form-control" value="" name="arrival_city" id="farrival_city">
                                                </div>
                                                <div class="clear"></div>
                                                <div class="six columns">
                                                    <label class="form-label">Departure Date:</label><div class="calendar-icon"><input type="text" class="form-control" value="" name="departure_date" id="fdeparture_date"><img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt=""></div>
                                                </div>
                                                <div class="six columns">
                                                    <label class="form-label">Arrival Date:</label><div class="calendar-icon"><input type="text" class="form-control" value="" name="arrival_date" id="farrival_date"><img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="five columns">
                                                    <div class="row">
                                                        <div class="six columns">
                                                            <label class="form-label">Rooms</label><select class="form-control">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </div>
                                                        <div class="six columns">
                                                            <label class="form-label">Adult</label><select class="form-control">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="seven columns">
                                                    <div class="row">
                                                        <div class="eight columns">
                                                            <label class="form-label">Child (2-11 Years)</label><select class="form-control">
                                                                <option value="0">0 With Bed</option>
                                                                <option value="1">1 Without Bed</option>
                                                            </select><select class="form-control">
                                                                <option value="0">0 With Bed</option>
                                                                <option value="1">1 Without Bed</option>
                                                            </select>
                                                        </div>
                                                        <div class="four columns">
                                                            <label class="form-label">&nbsp;</label><label class="form-label">Age <input type="text" value="" name="age" class="form-control"></label><label class="form-label">Age <input type="text" value="" name="age" class="form-control"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="twelve columns"><a href="#" class="gdl-button yellow-button large various">Show Availability!</a></div>
                                            </div>
                                        </div>
                                        <div class="hotel_tours_div" style="display: none;">
                                            <div class="row">
                                                <div class="twelve columns">
                                                    <div class="row">
                                                        <div class="seven columns">
                                                            <label class="form-label">Select Your Package</label><select class="form-control">
                                                                <option value="Package 1">Package 1</option>
                                                                <option value="Package 2">Package 2</option>
                                                                <option value="Package 3">Package 3</option>
                                                                <option value="Package 4">Package 4</option>
                                                                <option value="Package 5">Package 5</option>
                                                            </select>
                                                        </div>
                                                        <div class="five columns">
                                                            <label class="form-label">Persons</label><input type="text" class="form-control" value="" name="person">
                                                        </div>
                                                        <div class="twelve columns"><a href="#" class="gdl-button yellow-button large various">Show Availability!</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="four columns">
                <?php echo do_shortcode('[sp_testimonials_slider design="design-1"]'); ?>
                    <?php
                        echo do_shortcode('[masterslider id="1"]');
                    ?>
                </div>
                <div class="clear"></div>
                <div class="four columns">
                    <div class="latest-search-box">
                        <h4>Latest Searched <span>Hotels</span></h4>
                        <?php foreach ($search_hotel_names as $search_hotel_name) : ?>
                        <div class="search-data-value">
                            <div class="hotel-name">
                                <?php 
                                    $name = $search_hotel_name->hotel_name . ' - Hotel';
                                echo "<a href='/fernleaf/?page_id=1108&cityname=$name&CheckIndate=$search_hotel_name->CheckIndate&CheckoutDate=$search_hotel_name->CheckoutDate&NoAdult=$search_hotel_name->NoAdult'>"  ?>
                                <?php echo $search_hotel_name->hotel_name ?></a>
                                
                            </div>
                            <div class="hotel-cost"><span></span>&nbsp;&nbsp;&nbsp;SGD <?php echo $search_hotel_name->price ?></div>
                        </div>
                        <div class="clear"></div>
                       <?php endforeach; ?>
                    </div>
                </div>
                <div class="four columns">
                    <div class="latest-search-box">
                        <h4>Latest Searched <span>Flights</span></h4>
                        <div class="search-data-value">
                            <div class="hotel-name">Bangkok To Singapore</div>
                            <div class="hotel-cost"><span></span>&nbsp;&nbsp;&nbsp;fr. $120</div>
                        </div>
                        <div class="clear"></div>
                        <div class="search-data-value">
                            <div class="hotel-name">Singapore To Tokyo</div>
                            <div class="hotel-cost">fr. $450</div>
                        </div>
                        <div class="clear"></div>
                        <div class="search-data-value">
                            <div class="hotel-name">Singapore To Malaysia</div>
                            <div class="hotel-cost"><span></span>&nbsp;&nbsp;&nbsp;fr. $120</div>
                        </div>
                        <div class="clear"></div>
                        <div class="search-data-value">
                            <div class="hotel-name">India To Singapore</div>
                            <div class="hotel-cost"><span></span>&nbsp;&nbsp;&nbsp;fr. $230</div>
                        </div>
                        <div class="clear"></div>
                        <div class="search-data-value">
                            <div class="hotel-name">Singapore To Thailand</div>
                            <div class="hotel-cost"><span></span>&nbsp;&nbsp;&nbsp;fr. $120</div>
                        </div>
                        <div class="clear"></div>
                        <div class="search-data-value">
                            <div class="hotel-name">Australia to Singapore</div>
                            <div class="hotel-cost">fr. $340</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="four columns">
                    <div class="latest-search-box">
                        <img src="http://fernleaf.coderadobe.com/wp-content/uploads/offer-banner.jpg" alt="">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="twelve columns">
                    <div class="packages-box">
                        <div class="row titlerow">
                            <div class="four columns">
                                <h5>Popular Tour Packages</h5>
                            </div>
                            <div class="four columns">
                                <h5>Free & Easy Packages</h5>
                            </div>
                            <div class="four columns">
                                <h5>Weekend Getaways</h5>
                            </div>
                        </div>
                        <div class="box-gapping">
                            <div class="row">
                                <div class="four columns">
                                    <div class="package-details">
                                        
                                            <?php
                                            if( $my_query->have_posts() ) {
                                            while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                            <div class="packagebox">
                                            <div class="package-img">
                                                <?php
                                                if ( has_post_thumbnail() )
                                                {
                                                   the_post_thumbnail();
                                                } 
                                                ?>
                                            </div>
                                            <div class="package-content">
                                                <h6><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>
                                                <div class="package-content-box">
                                                    Hotel Name&nbsp;&nbsp;&nbsp;
                                                    <img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/grey.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/grey.png" alt="">&nbsp;&nbsp;fr. $120<br>
                                                    Hotel Name fr. $220<br>
                                                    3 Star Hotel fr. $140<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <?php endwhile;
                                          }
                                          wp_reset_query();  // Restore global post data stomped by the_post().
                                        ?>
                                    </div>
                                    <div class="viewmore"><a href="#">View More</a></div>
                                </div>
                                <div class="four columns">
                                    <div class="package-details">

                                        <?php
                                            if( $my_query1->have_posts() ) {
                                            while ($my_query1->have_posts()) : $my_query1->the_post(); ?>
                                            <div class="packagebox">
                                            <div class="package-img">
                                                <?php
                                                if ( has_post_thumbnail() )
                                                {
                                                   the_post_thumbnail();
                                                } 
                                                ?>
                                            </div>
                                            <div class="package-content">
                                                <h6><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>
                                                <div class="package-content-box">
                                                    Hotel Name&nbsp;&nbsp;&nbsp;
                                                    <img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/grey.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/grey.png" alt="">&nbsp;&nbsp;fr. $120<br>
                                                    Hotel Name fr. $220<br>
                                                    3 Star Hotel fr. $140<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <?php endwhile;
                                          }
                                          wp_reset_query();  // Restore global post data stomped by the_post().
                                        ?>
                                    </div>
                                    <div class="viewmore"><a href="#">View More</a></div>
                                </div>
                                <div class="four columns">
                                    <div class="package-details">

                                       <?php
                                            if( $my_query2->have_posts() ) {
                                            while ($my_query2->have_posts()) : $my_query2->the_post(); ?>
                                            <div class="packagebox">
                                            <div class="package-img">
                                                <?php
                                                if ( has_post_thumbnail() )
                                                {
                                                   the_post_thumbnail();
                                                } 
                                                ?>
                                            </div>
                                            <div class="package-content">
                                                <h6><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>
                                                <div class="package-content-box">
                                                    Hotel Name&nbsp;&nbsp;&nbsp;
                                                    <img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/grey.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/grey.png" alt="">&nbsp;&nbsp;fr. $120<br>
                                                    Hotel Name fr. $220<br>
                                                    3 Star Hotel fr. $140<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <?php endwhile;
                                          }
                                          wp_reset_query();  // Restore global post data stomped by the_post().
                                        ?>
                                    </div>
                                    <div class="viewmore"><a href="#">View More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="four column">
                    <div class="offer-packages">
                        <h5>Coming To Singapore</h5>
                        <div class="offer-packages-img">
                            <a href="#"><img src="http://fernleaf.coderadobe.com/wp-content/uploads/hotels.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="four column">
                    <div class="offer-packages">
                        <h5>Buses</h5>
                        <div class="offer-packages-img">
                            <a href="#"><img src="http://fernleaf.coderadobe.com/wp-content/uploads/buses.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="four column">
                    <div class="offer-packages">
                        <h5>Cruises</h5>
                        <div class="offer-packages-img">
                            <a href="#"><img src="http://fernleaf.coderadobe.com/wp-content/uploads/cruises.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="http://fernleaf.coderadobe.com/wp-content/themes/fernleaf/stylesheet/easy-responsive-tabs.css">
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript" src="http://fernleaf.coderadobe.com/wp-content/themes/fernleaf/javascript/easy-responsive-tabs.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script type="text/javascript">
    jQuery(function () {
        jQuery(".departure_date").datepicker();
        jQuery("#arrival_date").datepicker();
        jQuery("#checkin_date").datepicker();
        jQuery("#checkout_date").datepicker();
        jQuery("#hotel_checkin_date").datepicker();
        jQuery("#hotel_checkout_date").datepicker();
    });
    jQuery(document).ready(function () {
        jQuery("#verticalTab").easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any custom width
            fit: true   // 100% fits in a container
        });
        jQuery("#oneway").click(function (event) {
            jQuery("#arrival_date_div").hide();
            jQuery("#addmore").hide();
            jQuery(".more-flights").hide();
        });
        jQuery("#return").click(function (event) {
            jQuery("#arrival_date_div").show();
            jQuery("#addmore").hide();
            jQuery(".more-flights").hide();
        });
        jQuery("#multistop").click(function (event) {
            
            jQuery("#arrival_date_div").hide();
            jQuery(".more-flights").show();
            jQuery("#addmore").show();
        });
        jQuery("#hotel_tours").click(function (event) {
            jQuery(".hotel_tours_div").show();
            jQuery(".flights_hotel_tours").hide()
        });
        jQuery("#flights_hotel").click(function (event) {
            jQuery(".hotel_tours_div").hide();
            jQuery(".flights_hotel_tours").show()
        });
        jQuery("#flights_hotel_tours").click(function (event) {
            jQuery(".hotel_tours_div").hide();
            jQuery(".flights_hotel_tours").show()
        });
    });



var multistopForm = '<div class="row more-flights"><div class="six columns"><label class="form-label">Departure City:</label><input type="text" class="form-control" value="" name="departure_city[]" id="departure_city"></div><div class="six columns"><label class="form-label">Arrival City:</label><input type="text" class="form-control" value="" name="arrival_city[]" id="arrival_city"></div><div class="clear"></div><div class="six columns"><label class="form-label">Departure Date:</label><div class="calendar-icon"><input type="text" class="form-control" value="" name="departure_date[]" id="departure_date"><img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt=""></div></div><div class="clear"></div><hr></div>';


jQuery('#addmore').on('click', function(event){
    event.preventDefault();
    jQuery('.multistop').after(multistopForm);
});

</script>


<?php 

$sql = "SELECT CityName FROM `fle_cities` ";
$citynamesArray = $wpdb->get_results($sql);

$cityName = array();
foreach ($citynamesArray as $citynameArray){
    $city = $citynameArray->CityName . ' - City';
    array_push($cityName, $city);
}


$sql="SELECT hotelname FROM fle_hotels";
$rows = $wpdb->get_results($sql);

$hotelName = array();
foreach ($rows as $row) {
     $hotel_name = $row->hotelname.' - Hotel';
     array_push($hotelName, $hotel_name);
}

?>



<?php get_footer(); ?>

<script>

(function( $ ) {

    var cityname = <?php echo json_encode($cityName); ?>;
    var hotelname = <?php echo json_encode($hotelName); ?>;

    $( "#cityname" ).autocomplete({
      source: cityname.concat(hotelname)
    });

        $("#CheckIndate").datepicker({
        dateFormat: "dd-M-yy",
        minDate: 0,
        onSelect: function (date) {
            var date2 = $('#CheckIndate').datepicker('getDate');
            date2.setDate(date2.getDate() + 1);
            $('#CheckoutDate').datepicker('setDate', date2);
            //sets minDate to CheckIndate date + 1
            $('#CheckoutDate').datepicker('option', 'minDate', date2);
        }
    });
    $('#CheckoutDate').datepicker({
        dateFormat: "dd-M-yy",
        onClose: function () {
            var CheckIndate = $('#CheckIndate').datepicker('getDate');
            var CheckoutDate = $('#CheckoutDate').datepicker('getDate');
            //check to prevent a user from entering a date below date of CheckIndate
            if (CheckoutDate <= CheckIndate) {
                var minDate = $('#CheckoutDate').datepicker('option', 'minDate');
                $('#CheckoutDate').datepicker('setDate', minDate);
            }
        }
    });

    $("#search-main-form").validate();

  //   //http://localhost/fernleaf/?page_id=1052
    $("#hotel-search-btn").on('click', function(event){
        event.preventDefault();
        var data = $("#search-main-form").serialize();
        //window.location = '/fernleaf/?page_id=1052&' + data;
        //
        if(!$("#search-main-form").valid()) return false;  
            window.location = '/fernleaf/?page_id=1108&' + data;
    });

    
    
    $("#search-flight-form").validate();

  //   //http://localhost/fernleaf/?page_id=1052
    $("#flight-search-btn").on('click', function(event){
        event.preventDefault();
        var data = $("#search-flight-form").serialize();
        //window.location = '/fernleaf/?page_id=1052&' + data;
        //
        if(!$("#search-flight-form").valid()) return false;  
            window.location = '/fernleaf/api-flight/?' + data;
    });

    //  $("#multistop").on('change', function(event){
    //     event.preventDefault();
    //     var data = $("#search-flight-form").serialize();
    //     //window.location = '/fernleaf/?page_id=1052&' + data;
    //     //
    //     if(!$("#search-flight-form").valid()) return false;  
    //         window.location = '/fernleaf/?page_id=1125&' + data;
    // });

    $("#search-tours-form").validate();

  //   //http://localhost/fernleaf/?page_id=1052
    $("#tours-search-btn").on('click', function(event){
        event.preventDefault();
        var data = $("#search-tours-form").serialize();
        //window.location = '/fernleaf/?page_id=1052&' + data;
        //
        if(!$("#search-tours-form").valid()) return false;  
            window.location = 'fernleaf/api-tour-packages/?' + data;
    });

})(jQuery);

</script>