<?php

class TourBlockOut {
    public $TourID, $BlockOutDateFrom, $BlockOutDateTo;

    public function __construct( $tour_id, $block_out_date_from, $block_out_date_to ) {
        $this->TourID = $tour_id;
        $this->BlockOutDateFrom = new DateTime($block_out_date_from);
        $this->BlockOutDateTo = new DateTime($block_out_date_to);
    }

    public function save( $pdo ) {
        global $table_tour_block_out;

        if ( empty($this->TourID) ) {
            return FALSE;
        }

        $current_datetime = date('Y-m-d H:i:s');

        return $pdo->exec('INSERT INTO ' . $table_tour_block_out . ' VALUES (' .
                          "'{$this->TourID}'," .
                          "'" . $this->BlockOutDateFrom->format('Y-m-d H:i:s') . "'," .
                          "'" . $this->BlockOutDateTo->format('Y-m-d H:i:s') . "'," .                          
                          "'{$current_datetime}'," .
                          "'{$current_datetime}'" .
                          ')');
    }

    public function update( $pdo ) {
        global $table_tour_block_out;

        if ( empty($this->TourID) ) {
            return FALSE;
        }

        $current_datetime = date('Y-m-d H:i:s');

        return $pdo->exec('UPDATE ' . $table_tour_block_out . ' SET ' .
                          "BlockOutDateFrom = '" . $this->BlockOutDateFrom->format('Y-m-d H:i:s') . "'," .
                          "BlockOutDateTo = '" . $this->BlockOutDateTo->format('Y-m-d H:i:s') . "'," .
                          "ModifiedDatetime = '{$current_datetime}'" .
                          " WHERE TourID = '{$this->TourID}'");
    }

    public function delete( $pdo ) {
        global $table_tour_block_out;

        if ( empty($this->TourID) || empty($this->BlockOutDateFrom) || empty($this->BlockOutDateTo) ) {
            return FALSE;
        }

        return $pdo->exec('DELETE FROM ' . $table_tour_block_out . " WHERE TourID = '{$this->TourID}' AND BlockOutDateFrom='" . $this->BlockOutDateFrom->format('Y-m-d H:i:s') . "' AND BlockOutDateTo='" . $this->BlockOutDateTo->format('Y-m-d H:i:s') . "'");
    }
}