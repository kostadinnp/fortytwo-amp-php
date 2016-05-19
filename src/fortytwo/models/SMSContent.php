<?php

/**
 * Class SMSContent
 * Holds data on the SMS Content to be used in a message.
 * This is required for both SMS and IM.
 */
class SMSContent {
    public $message;
    public $encoding;
    public $route;
    public $sender_id;
    public $udh;
    public $pid;

    public function __construct($content) {
        $this->message = $content;
    }
    /**
     * Content was already set in the Construct method - but just in case it needs to be overriden
     * Optional: No
     * Type: String
     * String containing the SMS body / message to be delivered to the destination device. In case of binary (see “encoding” below),
     * this field’s value should be base64 encoded.If GSM7 or UCS2 encoding is used, one can optionally specify keys within the message
     * body to replace later with values. Each token has this structure: {#KEY}. See ‘params’ in the DESTINATION_INFO section for more
     * information on supplying the value for these keys.Minimum length of 1 character. Maximum length is of 5 pages in GSM7 encoding
     * equivalent.In case of binary message, maximum length is 140 bytes, including the udh field (see below).Maximum length includes
     * the value of key-value-pairs if these are used.
     * @param string $param
     */
    public function setMessage($param = "") {
        $this->message = $param;
    }

    /**
     * Optional: Yes
     * Type: Enum
     * Specify how the message will be encoded as when forwarding to the destination device. If unspecified, it will default to GSM7.
     *        Enum	Description
     *        GSM7	Value of “message” will be converted from UTF-8 (as per HTTP request) to GSM7 prior to forwarding to destination.
     *        UCS2	Value of “message” will be converted from UTF-8 (as per HTTP request) to UCS2 prior to forwarding to destination.
     *        BINARY	Value of “message” must contain the binary being sent, encoded using base64.
     * @param string $param
     */
    public function setEncoding($param = "") {
        $this->encoding = $param;
    }

    /**
     * Optional: Yes
     * Type: String
     * The SMS route to deliver on. If unspecified, it will use the route configured with the authorization token you use, otherwise
     * it can be overridden here.The only valid values are those routes available for your account.
     * @param string $param
     */
    public function setRoute($param = "") {
        $this->route = $param;
    }

    /**
     * Optional:Yes
     * Type: String
     * The sender ID (a.k.a. from, source) for the SMS delivery. If unspecified, the sender ID tied with your authorization token
     * will be used.If numerical: Contain only digits, between 1-15 digits long.If alphanumerical: A maximum of 11 characters and minimum of 1 character.
     * @param string $param
     */
    public function setSenderId($param = "") {
        $this->sender_id = $param;
    }

    /**
     * Optional: Conditional
     * Type: String
     * User Data Header. Value is in binary, encoded using base64. This is required if encoding is set to binary.
     * @param string $param
     */
    public function setUdh($param = "") {
        $this->udh = $param;
    }

    /**
     * Optional: Yes
     * Type: int
     *  Known as “TP-Protocol-Identifier (TP-PID)”. Although in the JSON packet this is an integer, it is actually an unsigned byte, so all values must be between
     * 0 and 255. If the value supplied is outside this range, the request will be declined.Default (if not specified): 0
     * See: http://www.3gpp.org/dynareport/23040.htm for information regarding this field.
     * @param string $param
     */
    public function setPid($param = "") {
        $this->pid = $param;
    }

}