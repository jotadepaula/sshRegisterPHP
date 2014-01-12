<?php
$errors = array();  	// array to hold validation errors
$data = array(); 		// array to pass back data
$key = $_POST['keyPub'];
if (empty($key)){
    $errors['keyPub'] = 'keyPub is required.';
}
if ( ! empty($errors)) {


    $data['success'] = false;
    $data['errors']  = $errors;
} else {


    $data['success'] = true;
    $data['message'] = 'Success!';
}


echo json_encode($data);