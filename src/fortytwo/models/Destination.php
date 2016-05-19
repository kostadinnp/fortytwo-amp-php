<?php

/**
 * Class Destination
 * Holds data related to the Destination to be used to send a message
 */
class Destination {
    public $number;
    public $custom_id;
    public $params;

    /**
     * When creating a object of type Destination it must be initialised with a mobile number as a parameter
     * @param $number
     */
    public function __construct($number) {
        $this->number = $number;
    }

    /**
     * Set the Custom ID of the destination
     * @param string $customID
     */
    public function setCustomID($customID = "") {
        $this->custom_id = $customID;
    }

    /**
     * Set the Parameters of the destination
     * @param array $params
     */
    public function setParams($params = array()) {
        $this->params = $params;
    }

}