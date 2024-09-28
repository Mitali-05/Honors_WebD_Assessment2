<?php
require 'vendor/autoload.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    delete_contact('contacts',$id);
    
    header('Location: index.php');
    exit;
}

include 'views/delete.view.php';