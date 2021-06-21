<?php

$SERVER     = '127.0.0.1';
$USER       = 'root';
$PASS       = '085283480788';

$DATABASE = 'solar_panel';

global $CONN;
$CONN = new mysqli($SERVER, $USER, $PASS);

if($CONN->connect_error){
    die("Connection Failed: ".$CONN->connect_error);
}