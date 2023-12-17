<?php

$host = "localhost";
$db = "dbteste";
$user = "root";
$senha = "root";

$mysqli = new mysqli($host, $user, $senha, $db);
if ($mysqli->connect_error){
    die("Falha ao conectar com o banco de dados!");
}