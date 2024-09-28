<?php

require 'vendor/autoload.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $fields = [
        'name'=>$name,
        'email' => $email,
        'phone' => $phone
    ];

    create_contact('contacts',$fields);
    
    header('Location: index.php');
    exit;
}

include 'views/add.view.php';