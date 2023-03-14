<?php

require_once('../../services/fetchCountries.php');

function displayCountries() {

    $countries = fetchCountries();

    $selected_pais1 = isset($_POST['country1']) ? $_POST['country1'] : '';
    $selected_pais2 = isset($_POST['country2']) ? $_POST['country2'] : '';

    $option1 = "";
    $option2 = "";

    foreach ($countries as $country) {
        $selected = $selected_pais1 == $country ? 'selected' : '';
        if ($selected_pais2 == $country) {
            $disabled = 'disabled';
        } else {
            $disabled = '';
        }
        
        $option1 = $option1 . "<option value='" . $country . "' $selected $disabled>". $country . "</option>";
    }

    foreach ($countries as $country) {
        $selected = $selected_pais2 == $country ? 'selected' : '';
        if ($selected_pais1 == $country) {
            $disabled = 'disabled';
        } else {
            $disabled = '';
        }

        $option2 = $option2 . "<option value='" . $country . "' $selected $disabled>". $country . "</option>";
    }

    echo '<form method="post">
        <select name="country1" id="country1" onchange="this.form.submit()">
            ' . $option1 . '
        </select>
        <select name="country2" id="country2" onchange="this.form.submit()">
            ' . $option2 . '
        </select>
    </form>';
}

displayCountries();
?>

