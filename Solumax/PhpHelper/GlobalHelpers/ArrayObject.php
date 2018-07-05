<?php

function array_to_object_recursive($array) {
    $obj = new stdClass;
    foreach ($array as $k => $v) {
        if (strlen($k)) {
            if (is_array($v)) {
                $obj->{$k} = array_to_object_recursive($v); //RECURSION
            } else {
                $obj->{$k} = $v;
            }
        }
    }
    return $obj;
}
