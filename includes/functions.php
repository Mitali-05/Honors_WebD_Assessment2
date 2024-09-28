<?php

//Connecting to database
function connectToDatabase()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=contacts', 'root', '153351');
        return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

function dd($var)
{
    var_dump($var);
    exit;
}

//Created SelectAll function to fetch all the data from database and use it in our code.
function selectAll($table)
{
    $pdo = connectToDatabase();
    $query = 'SELECT * FROM ' . $table;
    $statement = $pdo->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, \Models\Contact::class);
}

//this below function to add contact in database.
function create_contact($table,$fields){
    $pdo = connectToDatabase();
    $query = "INSERT INTO $table SET ";
    foreach ($fields as $field => $value) {
        $query .= "$field = '$value',";
    }
    $query = trim($query,",");
    $statement = $pdo->prepare($query);
    $statement->execute();
}

//Below function is used to delete a contact from database.
function delete_contact($table,$id){
    $pdo = connectToDatabase();
    $query = "DELETE FROM $table WHERE id= $id";
    $query = trim($query,",");
    $statement = $pdo->prepare($query);
    $statement->execute();
}
