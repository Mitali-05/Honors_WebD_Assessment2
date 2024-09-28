<?php 
require 'vendor/autoload.php';

$rows = selectAll('Contacts');

include 'views/index.view.php'; 