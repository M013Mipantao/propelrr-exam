<?php

$errors = [];
$data = [];

if (!empty($_POST['fullname'])) {
    if(!preg_match('/^[a-zA-Z\s.,]+$/', $_POST['fullname'])){
        $errors['fullname'] = 'Text and characters like comma and period only';
    }
}else{
    $errors['fullname'] = 'Name is required.';
}

if (!empty($_POST['email'])) {
    if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Check the email format';
    }
}else{
    $errors['email'] = 'Email is required.';
}

if (!empty($_POST['number'])) {
    if(!preg_match('/^[0-9]{11}+$/', $_POST['number'])){
        $errors['number'] = 'Incorrect mobile number format';
    }
}else{
    $errors['number'] = 'Mobile Number is required.';
}

if (empty($_POST['dateofbirth'])) {
    $errors['dateofbirth'] = 'Date of Birth is required.';
}
if (empty($_POST['age'])) {
    $errors['age'] = 'Age is required.';
}
if (empty($_POST['gender'])) {
    $errors['gender'] = 'Gender is required.';
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);