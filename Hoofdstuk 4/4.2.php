<?php

echo isGetalDeelbaarDoorDrie(48);

function isGetalDeelbaarDoorDrie($a){
    if ($a % 3 == 0) {
        return "true";
    } else {
        return "false";
    }
}