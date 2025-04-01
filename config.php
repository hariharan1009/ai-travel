<?php
$conn = new mysqli("localhost", "root", "", "dreamtrails_db"); 
// Database : create database dreamtrails_db;
// Table : create table users (username varchar(48), email varchar(48) primary key, password varchar(72));
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
