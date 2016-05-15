<?php

    include_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php');

    function get_pickup_point_list( $activity_id ) {
       global $api_url, $soap_header;

        // get activity pickup point
        $soap_pickup_point_call = 'GetPickupPointList';

        $client = new SoapClient($api_url, array('trace' => 1));
        $result = $client->__soapCall($soap_pickup_point_call, array(array('ActivityID' => $activity_id)), null, $soap_header);

        $pickup_point_list = array();
        if ( empty($result) == FALSE ) {
            if ( isset($result->GetPickupPointListResult->PickUpPointList->PickUpPoint) ) {
                $pickup_points = $result->GetPickupPointListResult->PickUpPointList->PickUpPoint;

                if ( empty($pickup_points) == FALSE ) {
                    foreach ( $pickup_points as $pickup_point ) {
                        $pickup_point_list[$pickup_point->HotelCode] = $pickup_point;
                    }
                }
            }
        }
        return $pickup_point_list;
    }