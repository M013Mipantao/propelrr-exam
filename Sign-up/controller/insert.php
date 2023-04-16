<?php
include('../db_connection/connection.php');

$errors = [];
$data = [];
$dataArry = [];

$query = "INSERT INTO `profile`( `Name`, `Age`, `Gender`, `Bday`, `Email`, `Number`) VALUES (:fullname,:age,:gender,:dateofbirth,:email,:number)";
$query_run = $conn->prepare($query);

$dataArry = [
    ":fullname" => $_POST['fullname'],
    ":age" => $_POST['age'],
    ":gender" => $_POST['gender'],
    ":dateofbirth" => $_POST['dateofbirth'],
    ":email" => $_POST['email'],
    ":number" => $_POST['number']

];
$query_excute = $query_run->execute($dataArry);


if (!$query_excute) {
    $data['success'] = false;
    $data['errors'] = 'Something went wrong!';
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);