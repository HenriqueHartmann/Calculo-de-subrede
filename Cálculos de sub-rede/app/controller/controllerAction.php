<?php
    $action = $_GET['action'];
    if(isset($action)) {
        $action = 'index';
    }

    switch ($action) {

        case 'index':
            include_once "../view/index.php";
        break;
    }