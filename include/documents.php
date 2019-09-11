<?php
    echo "<pre>";
    $json = file_get_contents('./../customerData/menu.json');
    $data = json_decode($json, true);

    if($_GET){
        $dataDoc = $data[$_GET['nivel1']]['children'][$_GET['nivel2']];
    }
    print_r($dataDoc);
    echo "</pre>";
?>



