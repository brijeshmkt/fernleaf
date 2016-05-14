<?php

class Tour {
    public $TourID, $TourName, $ImagePath, $TravelDateRequired, $TourType, $TourTypeDescription, $TourCategory, $TourFrequency, $TransferType, $ChildAgeFrom, $ChildAgeTo, $FerryName, $FerryTime, $PickupTime, $TourStartsTime, $Duration, $TourDescription;

    public function __construct( $tour_id, $tour_name = '', $image_path = '', $travel_date_required = '', $tour_type = '', $tour_type_description = '', $tour_category = '', $tour_frequency = '', $transfer_type = '', $child_age_from = '', $child_age_to = '', $ferry_name = '', $ferry_time = '', $pickup_time = '', $tour_starts_time = '', $duration = '', $tour_description = '' ) {
        $this->TourID = $tour_id;
        $this->TourName = $tour_name;
        $this->ImagePath = $image_path;
        $this->TravelDateRequired = $travel_date_required;
        $this->TourType = $tour_type;
        $this->TourTypeDescription = $tour_type_description;
        $this->TourCategory = $tour_category;
        $this->TourFrequency = $tour_frequency;
        $this->TransferType = $transfer_type;
        $this->ChildAgeFrom = $child_age_from;
        $this->ChildAgeTo = $child_age_to;
        $this->FerryName = $ferry_name;
        $this->FerryTime = $ferry_time;
        $this->PickupTime = $pickup_time;
        $this->TourStartsTime = $tour_starts_time;
        $this->Duration = $duration;
        $this->TourDescription = $tour_description;
    }

    private function db_to_object_single( $pdo, $db_tour ) {
        $db_tour = $db_tour->fetchObject();
        
        $tour = new Tour( $db_tour->TourID, $db_tour->TourName, $db_tour->ImagePath, $db_tour->TravelDateRequired, $db_tour->TourType, $db_tour->TourTypeDescription, $db_tour->TourCategory, $db_tour->TourFrequency, $db_tour->TransferType, $db_tour->ChildAgeFrom, $db_tour->ChildAgeTo, $db_tour->FerryName, $db_tour->FerryTime, $db_tour->PickupTime, $db_tour->TourStartsTime, $db_tour->Duration, $db_tour->TourDescription );
        $tour->CreatedDatetime = new DateTime($db_tour->CreatedDatetime);
        $tour->ModifiedDatetime = new DateTime($db_tour->ModifiedDatetime);

        // get tour block out date

        return $tour;
    }

    public function save( $pdo ) {
        global $table_tour;

        if ( empty($this->TourID) ) {
            return FALSE;
        }

        $current_datetime = date('Y-m-d H:i:s');

        $tour_id = addslashes($this->TourID);
        $tour_name = addslashes($this->TourName);
        $image_path = addslashes($this->ImagePath);
        $travel_date_required = addslashes($this->TravelDateRequired);
        $tour_type = addslashes($this->TourType);
        $tour_type_description = addslashes($this->TourTypeDescription);
        $tour_category = addslashes($this->TourCategory);
        $tour_frequency = addslashes($this->TourFrequency);
        $transfer_type = addslashes($this->TransferType);
        $child_age_from = addslashes($this->ChildAgeFrom);
        $child_age_to = addslashes($this->ChildAgeTo);
        $ferry_name = addslashes($this->FerryName);
        $ferry_time = addslashes($this->FerryTime);
        $pickup_time = addslashes($this->PickupTime);
        $tour_starts_time = addslashes($this->TourStartsTime);
        $duration = addslashes($this->Duration);
        $tour_description = addslashes($this->TourDescription);

        return $pdo->exec('INSERT INTO ' . $table_tour . ' VALUES (' .
                          "'{$tour_id}'," .
                          "'{$tour_name}'," .
                          "'{$image_path}'," .
                          "'{$travel_date_required}'," .
                          "'{$tour_type}'," .
                          "'{$tour_type_description}'," .
                          "'{$tour_category}'," .
                          "'{$tour_frequency}'," .
                          "'{$transfer_type}'," .
                          "'{$child_age_from}'," .
                          "'{$child_age_to}'," .
                          "'{$ferry_name}'," .
                          "'{$ferry_time}'," .
                          "'{$pickup_time}'," .
                          "'{$tour_starts_time}'," .
                          "'{$duration}'," .
                          "'{$tour_description}'," .                             
                          "'{$current_datetime}'," .
                          "'{$current_datetime}'" .
                          ')');
    }
    

    public function update( $pdo ) {
        global $table_tour;

        if ( empty($this->TourID) ) {
            return FALSE;
        }

        $current_datetime = date('Y-m-d H:i:s');

        $tour_id = addslashes($this->TourID);
        $tour_name = addslashes($this->TourName);
        $image_path = addslashes($this->ImagePath);
        $travel_date_required = addslashes($this->TravelDateRequired);
        $tour_type = addslashes($this->TourType);
        $tour_type_description = addslashes($this->TourTypeDescription);
        $tour_category = addslashes($this->TourCategory);
        $tour_frequency = addslashes($this->TourFrequency);
        $transfer_type = addslashes($this->TransferType);
        $child_age_from = addslashes($this->ChildAgeFrom);
        $child_age_to = addslashes($this->ChildAgeTo);
        $ferry_name = addslashes($this->FerryName);
        $ferry_time = addslashes($this->FerryTime);
        $pickup_time = addslashes($this->PickupTime);
        $tour_starts_time = addslashes($this->TourStartsTime);
        $duration = addslashes($this->Duration);
        $tour_description = addslashes($this->TourDescription);

        return $pdo->exec('UPDATE ' . $table_tour . ' SET ' .
                          "TourName = '{$tour_name}'," .
                          "ImagePath = '{$image_path}'," .
                          "TravelDateRequired = '{$travel_date_required}'," .
                          "TourType = '{$tour_type}'," .
                          "TourTypeDescription = '{$tour_type_description}'," .
                          "TourCategory = '{$tour_category}'," .
                          "TourFrequency = '{$tour_frequency}'," .
                          "TransferType = '{$transfer_type}'," .
                          "ChildAgeFrom = '{$child_age_from}'," .
                          "ChildAgeTo = '{$child_age_to}'," .
                          "FerryName = '{$ferry_name}'," .
                          "FerryTime = '{$ferry_time}'," .
                          "PickupTime = '{$pickup_time}'," .
                          "TourStartsTime = '{$tour_starts_time}'," .
                          "Duration = '{$duration}'," .
                          "TourDescription = '{$tour_description}'," .
                          "ModifiedDatetime = '{$current_datetime}'" .
                          " WHERE TourID = '{$tour_id}'");
    }

    public function delete( $pdo ) {
        global $table_tour;

        if ( empty($this->TourID) ) {
          return FALSE;
        }

        return $pdo->exec('DELETE FROM ' . $table_tour . " WHERE TourID = '{$this->TourID}'");
    }

    public static function get_single( $pdo, $tour_id ) {
        global $table_tour;

        $result = $pdo->query('SELECT * FROM ' . $table_tour . ' WHERE TourID=\'' . $tour_id . '\'', PDO::FETCH_OBJ);

        if ( empty($result) ) {
            return NULL;
        }

        return Tour::db_to_object_single($pdo, $result);
    }
}