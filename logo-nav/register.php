<?php
$key = $_POST['keyPub'];
$errors = array();
$data = array();

if(!empty($errors)){
    $data['success'] = false;
    $date['errors'] = $errors;
}else{
    $data['success'] = true;
    $date['message'] = 'Success';
}
echo json_encode($data);