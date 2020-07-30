<?php

namespace App\Libraries\Utils;

class ResponseManager {

    public static $response = array('data' => '', 'message' => '', 'code' =>'');

    public static function getResult($data = '', $message = '') {
        self::$response['data'] = $data;
        self::$response['message'] = $message;
        return self::$response;
    }

    public static function getError($data = '', $message = '') {
        self::$response['data'] = $data;
        self::$response['message'] = $message;
        return self::$response;
    }
}
