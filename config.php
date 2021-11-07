<?php

    $isProduction = false;

    if($isProduction) {

        $url = 'https://www.introarquitectura.com.ar/';
        $assets_url = 'https://www.introarquitectura.com.ar/';

        $dsn = 'mysql:dbname=introarquitectur_main;host=localhost';
        $user = 'introarquitectur_main';
        $password = 'Pv!-,ZBkW[WS';

        $upload_dir = '/home/introarquitectur/public_html/uploads/';

        $origins = 'introarquitectura.com.ar';

    } else {

        $url = 'http://localhost/Intro/';
        $assets_url = 'http://localhost/Intro/';
        
        $dsn = 'mysql:dbname=intro;host=localhost';
        $user = 'root';
        $password = ''; 

        $upload_dir = 'D:/xampp/htdocs/Intro/uploads/';

        $origins = '*';

    }

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

    try {
        $db = new PDO($dsn, $user, $password);
        $db->exec("set names utf8");
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }

?>