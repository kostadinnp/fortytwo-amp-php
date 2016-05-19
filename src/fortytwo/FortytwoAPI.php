<?php

/**
 * Class FortytwoAPI
 * Main Class used to communicate with FortyTwo REST Server Directly.
 * CURL must be installed on the server for this to work.
 */
class FortytwoAPI {

    public $baseUrl;
    public $path;
    public $fullPath;
    public $contentType;

    public function __construct() {
        $this->baseUrl = 'https://rest.fortytwo.com/1/';
        $this->fullPath = $this->baseUrl.$this->path;
    }

    /**
     * Send the actual API call to the FortyTwo Rest Server
     * @param $body
     * @param $headers
     * @return mixed
     * @throws Exception
     */
    public function post($body,$headers) {
        try {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $this->fullPath);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30000);
            curl_setopt($ch, CURLOPT_POST, TRUE);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

            $response = curl_exec($ch);
            curl_close($ch);

            return $response;
        } catch (Exception $e) {
            throw new Exception($e);
        }

    }
}

