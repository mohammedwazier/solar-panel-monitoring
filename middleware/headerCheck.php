<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Content-Type: application/json');
    die(json_encode([
        'message' => 'Wrong Request Method',
        'state' => false,
        'tech' => 'please contact the Administrator for using this API'
    ]));
}

function validateParams($data, $paramsList){
    if(count($data) !== count($paramsList)){
        responseFailed($paramsList, 101);
    }

    $result = array_diff($data, $paramsList);
    if(count($result) > 0){
        responseFailed($paramsList, 102);
    }
    return true;
}

function responseFailed($params = [], $code = 100, $err = '', $message = 'Wrong parameter'){
    header('Content-Type: application/json');
    die(json_encode([
        'message' => $message,
        'state' => false,
        'data_params' => $params,
        'code' => $code,
        'err' => $err
    ]));
}

function responseSuccess($message = 'Success', $data = []){
    header('Content-Type: application/json');
    die(json_encode([
        'message' => $message,
        'state' => true,
        'data' => $data,
        'code' => 200
    ]));
}