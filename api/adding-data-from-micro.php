<?php

require_once('../config/Connection.php');
require_once('../middleware/headerCheck.php');

// POST BODY JSON DATA
$RAW_DATA   = file_get_contents("php://input");
$ARR_DATA   = json_decode($RAW_DATA, true);
$ARR_KEY    = array_keys($ARR_DATA);

$parameter  = ['latitude', 'longitude', 'light_intensity', 'voltage', 'status', 'machine_id'];

$data       = validateParams($ARR_KEY, $parameter);

$Date       = date("Y-m-d H:i:s");
// Query
$Query = "INSERT INTO
`solar_panel`.`log_monitor`
(`created_at`, `latitude`, `longitude`, `intensitas_cahaya`, `voltage`, `machine_id`, `status`)
VALUES
('{$Date}', '{$ARR_DATA['latitude']}', '{$ARR_DATA['longitude']}', '{$ARR_DATA['light_intensity']}', '{$ARR_DATA['voltage']}', '{$ARR_DATA['machine_id']}', '{$ARR_DATA['status']}')
";

try {
    if ($CONN->query($Query) === TRUE) {
        responseSuccess('Success insert data to Log Data', $ARR_DATA);
    }
} catch (Exception $th) {
    responseFailed(null, $th->getCode(), $th->getMessage(), 'Catch an Error', $th);
}