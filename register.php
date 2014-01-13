<?php

$key = $_POST['keyPub'];

if (empty($key)){
    echo'keyPub is required.';
} else {
    $temp_file = fopen("rsa_temp.txt","a");
    fwrite($temp_file,"ncsjkdncjksdncsjdncjskdn");
    fclose($temp_file);
}
