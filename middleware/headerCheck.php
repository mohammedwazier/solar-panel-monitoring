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
        responseParams($paramsList, 101);
    }

    $result = array_diff($data, $paramsList);
    if(count($result) > 0){
        responseParams($paramsList, 102);
    }
    return true;
}

function responseParams($params, $code = 100){
    header('Content-Type: application/json');
    die(json_encode([
        'message' => 'Wrong parameter',
        'state' => false,
        'data_params' => $params,
        'code' => $code
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