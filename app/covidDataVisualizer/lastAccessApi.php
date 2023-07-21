<?php
$connect_db = require './app/config/database.php';

date_default_timezone_set('America/Fortaleza');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['selectCountry'])) {

    $country = $_POST['selectCountry'];

    $current_date = date('Y-m-d');
    $current_hour = date('H:i:s');
    $stmt = $connect_db->prepare("INSERT INTO acessos (pais, data, hora) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $country, $current_date, $current_hour);
    $stmt->execute();}


    $last_country_stmt = $connect_db->prepare("SELECT pais FROM acessos ORDER BY id DESC LIMIT 1");
    $last_country_stmt->execute();
    $last_country_result = $last_country_stmt->get_result();
    

    $last_access_stmt = $connect_db->prepare("SELECT data, hora FROM acessos ORDER BY data DESC, hora DESC LIMIT 1");
    $last_access_stmt->execute();
    $last_access_result = $last_access_stmt->get_result();


    if ($last_country_result->num_rows > 0 && $last_access_result->num_rows > 0) {
        $last_country_data = $last_country_result->fetch_assoc();
        $last_country = $last_country_data['pais'];
        echo "<div>O último país procurado foi: ". $last_country."</div>";
   
   
        $last_access_data = $last_access_result->fetch_assoc();
        $last_access_data = date('d-m-Y', strtotime($last_access_data['data']));
        echo "<div>O último acesso foi feito no dia ". $last_access_data."</div>";
    
    
    } else {
        echo "Não há registros de acessos anteriores.";
    }
?>
