<?php

class Activity {
    public $ActivityRefNo, $ActivityID, $ActivityName, $ImagePath, $ActivityInclusive, $Country, $City, $MinPax, $MaxPax, $AdvancePurchasePeriod, $TravelValidFrom, $TravelValidTo, $Currency, $PriceAdult, $PriceChild, $PriceSeniorCitizen, $IsPassportRequired, $CancellationPolicy, $BookingType;
    public $CreatedDatetime, $ModifiedDatetime;

    public function __construct( $activity_ref_no, $activity_id, $activity_name = '', $image_path = '', $activity_inclusive = '', $country = '', $city = '', $min_pax = '', $max_pax = '', $advance_purchase_period = '', $travel_valid_from = '', $travel_valid_to = '', $currency = '', $price_adult = '', $price_child = '', $price_senior_citizen = '', $is_passport_required = '', $cancellation_policy = '', $booking_type = '' ) {
        $this->ActivityRefNo = $activity_ref_no;
        $this->ActivityID = $activity_id;
        $this->ActivityName = $activity_name;
        $this->ImagePath = $image_path;
        $this->ActivityInclusive = $activity_inclusive;
        $this->Country = $country;
        $this->City = $city;
        $this->MinPax = $min_pax;
        $this->MaxPax = $max_pax;
        $this->AdvancePurchasePeriod = $advance_purchase_period;
        $this->TravelValidFrom = new DateTime($travel_valid_from);
        $this->TravelValidTo = new DateTime($travel_valid_to);
        $this->Currency = $currency;
        $this->PriceAdult = $price_adult;
        $this->PriceChild = $price_child;
        $this->PriceSeniorCitizen = $price_senior_citizen;
        $this->IsPassportRequired = $is_passport_required;
        $this->CancellationPolicy = $cancellation_policy;
        $this->BookingType = $booking_type;
    }

    private function db_to_object_single( $pdo, $db_activity, $is_load_data = FALSE ) {
        if ( $db_activity instanceof PDOStatement ) {
            $db_activity = $db_activity->fetchObject();
        }
        
        $activity = new Activity( $db_activity->ActivityRefNo, $db_activity->ActivityID, $db_activity->ActivityName, $db_activity->ImagePath, $db_activity->ActivityInclusive, $db_activity->Country, $db_activity->City, $db_activity->MinPax, $db_activity->MaxPax, $db_activity->AdvancePurchasePeriod, $db_activity->TravelValidFrom, $db_activity->TravelValidTo, $db_activity->Currency, $db_activity->PriceAdult, $db_activity->PriceChild, $db_activity->PriceSeniorCitizen, $db_activity->IsPassportRequired, $db_activity->CancellationPolicy, $db_activity->BookingType );
        $activity->CreatedDatetime = new DateTime($db_activity->CreatedDatetime);
        $activity->ModifiedDatetime = new DateTime($db_activity->ModifiedDatetime);
        $activity->Tours = array();

        if ( $is_load_data ) {
            // get activity tour data
            include_once('ActivityTour.php');
            $activity_tours = ActivityTour::get_single($pdo, $activity->ActivityID);

            // get tour details
            if ( empty($activity_tours) == FALSE ) {
                include_once('Tour.php');

                $tour_ids = array();
                foreach ( $activity_tours as $activity_tour ) {
                    $tour_ids[] = $activity_tour->TourID;

                    $tour = Tour::get_single( $pdo, $activity_tour->TourID );
                    $activity->Tours[$tour->TourID] = $tour;
                }
            }

            
        }

        return $activity;
    }

    public function save($pdo) {
        global $table_activity;

        if ( empty($this->ActivityRefNo) || empty($this->ActivityID) ) {
            return FALSE;
        }

        $current_datetime = date('Y-m-d H:i:s');

        $activity_ref_no = addslashes($this->ActivityRefNo);
        $activity_id = addslashes($this->ActivityID);
        $activity_name = addslashes($this->ActivityName);
        $image_path = addslashes($this->ImagePath);
        $activity_inclusive = addslashes($this->ActivityInclusive);
        $country = addslashes($this->Country);
        $city = addslashes($this->City);
        $min_pax = addslashes($this->MinPax);
        $max_pax = addslashes($this->MaxPax);
        $advance_purchase_period = addslashes($this->AdvancePurchasePeriod);
        $currency = addslashes($this->Currency);
        $price_adult = addslashes($this->PriceAdult);
        $price_child = addslashes($this->PriceChild);
        $price_senior_citizen = addslashes($this->PriceSeniorCitizen);
        $is_passport_required = addslashes($this->IsPassportRequired);
        $cancellation_policy = addslashes($this->CancellationPolicy);
        $booking_type = addslashes($this->BookingType);

        return $pdo->exec('INSERT INTO ' . $table_activity . ' VALUES (' .
                          "'{$activity_ref_no}'," .
                          "'{$activity_id}'," .
                          "'{$activity_name}'," .
                          "'{$image_path}'," .
                          "'{$activity_inclusive}'," .
                          "'{$country}'," .
                          "'{$city}'," .
                          "'{$min_pax}'," .
                          "'{$max_pax}'," .
                          "'{$advance_purchase_period}'," .
                          "'" . $this->TravelValidFrom->format('Y-m-d H:i:s') . "'," .
                          "'" . $this->TravelValidTo->format('Y-m-d H:i:s') . "'," .
                          "'{$currency}'," .
                          "'{$price_adult}'," .
                          "'{$price_child}'," .
                          "'{$price_senior_citizen}'," .
                          "'{$is_passport_required}'," .
                          "'{$cancellation_policy}'," .
                          "'{$booking_type}'," .
                          "'{$current_datetime}'," .
                          "'{$current_datetime}'" .
                          ')');
    }

    public function update($pdo) {
        global $table_activity;

        if ( empty($this->ActivityRefNo) || empty($this->ActivityID) ) {
          return FALSE;
        }

        $current_datetime = date('Y-m-d H:i:s');

        $activity_ref_no = addslashes($this->ActivityRefNo);
        $activity_id = addslashes($this->ActivityID);
        $activity_name = addslashes($this->ActivityName);
        $image_path = addslashes($this->ImagePath);
        $activity_inclusive = addslashes($this->ActivityInclusive);
        $country = addslashes($this->Country);
        $city = addslashes($this->City);
        $min_pax = addslashes($this->MinPax);
        $max_pax = addslashes($this->MaxPax);
        $advance_purchase_period = addslashes($this->AdvancePurchasePeriod);
        $currency = addslashes($this->Currency);
        $price_adult = addslashes($this->PriceAdult);
        $price_child = addslashes($this->PriceChild);
        $price_senior_citizen = addslashes($this->PriceSeniorCitizen);
        $is_passport_required = addslashes($this->IsPassportRequired);
        $cancellation_policy = addslashes($this->CancellationPolicy);
        $booking_type = addslashes($this->BookingType);


        return $pdo->exec('UPDATE ' . $table_activity . ' SET ' .
                          "ActivityName = '{$activity_name}'," .
                          "ImagePath = '{$image_path}'," .
                          "ActivityInclusive = '{$activity_inclusive}'," .
                          "Country = '{$country}'," .
                          "City = '{$city}'," .
                          "MinPax = '{$min_pax}'," .
                          "MaxPax = '{$max_pax}'," .
                          "AdvancePurchasePeriod = '{$advance_purchase_period}'," .
                          "TravelValidFrom = '" . $this->TravelValidFrom->format('Y-m-d H:i:s') . "'," .
                          "TravelValidTo = '" . $this->TravelValidTo->format('Y-m-d H:i:s') . "'," .
                          "Currency = '{$currency}'," .
                          "PriceAdult = '{$price_adult}'," .
                          "PriceChild = '{$price_child}'," .
                          "PriceSeniorCitizen = '{$price_senior_citizen}'," .
                          "IsPassportRequired = '{$is_passport_required}'," .
                          "CancellationPolicy = '{$cancellation_policy}'," .
                          "BookingType = '{$booking_type}'," .
                          "ModifiedDatetime = '{$current_datetime}'" .
                          " WHERE ActivityRefNo = '{$this->ActivityRefNo}' AND ActivityID = '{$this->ActivityID}'");
    }

    public function delete( $pdo ) {
        global $table_activity;

        if ( empty($this->ActivityRefNo) || empty($this->ActivityID) ) {
          return FALSE;
        }

        return $pdo->exec('DELETE FROM ' . $table_activity . " WHERE ActivityRefNo = '{$this->ActivityRefNo}' AND ActivityID = '{$this->ActivityID}'");
    }

    public static function get_all( $pdo, $filters = array(), $is_load_data = FALSE ) {
        global $table_activity;

        $query = 'SELECT * FROM ' . $table_activity;

        if ( empty($filters) == FALSE ) {
            $filter_index = 0;
            $query .= ' WHERE ';
            foreach ( $filters as $filter ) {
                if ($filter_index++ > 0) {
                    $query .= ' AND ' . $filter;
                }
                else {
                    $query .= $filter;
                }
            }
        }

        $results = $pdo->query($query, PDO::FETCH_OBJ);

        if ( empty($results) ) {
            return NULL;
        }

        $activities = array();
        foreach ( $results as $result ) {
            $activity = Activity::db_to_object_single($pdo, $result, $is_load_data);
            $activities[$activity->ActivityID] = $activity;
        }

        return $activities;
    }

    public static function get_single( $pdo, $activity_id, $is_load_data = FALSE ) {
        global $table_activity;

        $result = $pdo->query('SELECT * FROM ' . $table_activity . ' WHERE ActivityID=\'' . $activity_id . '\'', PDO::FETCH_OBJ);

        if ( empty($result) ) {
            return NULL;
        }

        return Activity::db_to_object_single($pdo, $result, $is_load_data);
    }
}