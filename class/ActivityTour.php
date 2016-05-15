<?php

class ActivityTour {
    public $ActivityID, $TourID;

    public function __construct( $activity_id, $tour_id ) {
        $this->ActivityID = $activity_id;
        $this->TourID = $tour_id;
    }

    public function save( $pdo ) {
        global $table_activity_tour;

        if ( empty($this->ActivityID) || empty($this->TourID) ) {
            return FALSE;
        }

        $current_datetime = date('Y-m-d H:i:s');

        return $pdo->exec('INSERT INTO ' . $table_activity_tour . ' VALUES (' .
                          "'{$this->ActivityID}'," .
                          "'{$this->TourID}'," .
                          "'{$current_datetime}')");
    }

    public function delete( $pdo ) {
        global $table_activity_tour;

        if ( empty($this->ActivityID) || empty($this->TourID) ) {
          return FALSE;
        }

        return $pdo->exec('DELETE FROM ' . $table_activity_tour . " WHERE ActivityID = '{$this->ActivityID}' AND TourID = '{$this->TourID}'");
    }

    public static function get_single( $pdo, $activity_id ) {
        global $table_activity_tour;

        $result = $pdo->query('SELECT * FROM ' . $table_activity_tour . ' WHERE ActivityID=\'' . $activity_id . '\'', PDO::FETCH_OBJ);

        if ( empty($result) ) {
            return NULL;
        }

        return $result;
    }
}