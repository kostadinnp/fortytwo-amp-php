<?php

/**
 * Class IMContent
 * Holds data on the IM Content Object to be used within a message
 */
class IMContent {
    public $content;
    public $channel;
    public $content_type;
    public $sender_id;


    public function __construct($content) {
        $this->content = $content;
    }
    /**
     * Content was already set in the Construct method - but just in case it needs to be overriden
     * Optional: No
     * Type: String
     * The IM message body is to be specified here.For content_type ‘text’ the value is to be encoded in plain text UTF-8.
     * For any other content_type value, the value is to be encoded in base64.
     * With content_type ‘text’ values, one can optionally specify keys within the message body to replace later with values.
     * Each token has this structure: {#KEY}. See ‘params’ in the DESTINATION_INFO section for more information on supplying the value for these keys.
     * @param string $param
     */
    public function setContent($param = "") {
        $this->content = $param;
    }


    /**
     * Optional:Yes
     * Type: String
     * The sender ID (a.k.a. from) for the IM delivery. If unspecified, the sender ID tied to your authorization token will be used.
     * The values allowed here have to be pre-approved manually against your account, unless notified otherwise by your account manager.
     * A maximum of 20 characters is accepted.
     * @param string $param
     */
    public function setSenderId($param = "") {
        $this->sender_id = $param;
    }

    /**
     * Select the the IM Channel (e.g VIBER)
     * Optional: Conditional
     * Type: Enum
     * Since multiple IM_CONTENT blocks can be defined in the “im_content” field, this field is required to create a distinction between all entries.
     * This field can be left unset only once between all the elements of the im_content array. A block with this value unset denotes that it is the
     * default message to be used to deliver over any supported IM provider which isn’t overridden.Otherwise, to override, it must be set to one of
     * these enum values. Each enum value can only be used once in a request.If no default is present (i.e. this field unset), messages will be attempted
     * on the overridden provider only (and if specified, with an SMS fallback too).If a sender id is specified, this value must be set.
            Enum	Description
            VIBER	Override for delivery on the Viber network.
     * @param string $param
     */
    public function setChannel($param = "") {
        $this->channel = $param;
    }

    /**
     * Optional: Yes
     * Type: Enum
     * Since IM delivery allows for rich content delivery, the message’s content type must be specified.The following content types are supported at
     * this point in time:
            Enum	Description
            text	Plain Text content (full UTF-8 charset).
            If unspecified, it defaults to text.
     * @param string $param
     */
    public function setContentType($param = "") {
        $this->content_type = $param;
    }


}