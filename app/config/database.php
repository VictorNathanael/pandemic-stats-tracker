<?php
$db_host = 'localhost';     
$db_name = 'acesso_api_covid'; 
$db_user = 'root';       
$db_pass = '';       

try {
    $connect_db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$connect_db) {
        throw new Exception("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

    mysqli_set_charset($connect_db, 'utf8');

    return $connect_db;
} catch (Exception $e) {
    die($e->getMessage());
}
