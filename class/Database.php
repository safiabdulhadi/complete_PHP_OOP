<?php

class Database{
    // define Variable
    public $dbConnection;
    public $records;

// This function can be used to open the connection with the datebase
function openConnection(): bool{}

// This function can be used to fetch records from database
function fetchRecord($id) : array{}

// Insert Records
function insertRecord($data) : bool{}

// Update Records
function updateRecord($id,$data) : bool{}

// Delete Records
function deleteRecord($id) : bool{}


}
?>