<?php
    $config = require_once $_SERVER['DOCUMENT_ROOT'].'/lesson6/config/config.php';
    $link = mysqli_connect(
        $config['db_host'],
        $config['db_user'],
        $config['db_pass'],
        $config['db_name']
    );
    session_start();