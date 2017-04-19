<?php
try {
        $db = new PDO('mysql:host=localhost;dbname=database', 'root','plass');
        // var_dump($db);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo "Connected to Database";
} catch (Exception $e) {
    echo "Cannot connect to the DB! <br>";
    // echo $e->getMessage();    
    // echo $e->getFile();
    exit;
}



    // if( $db = new PDO('mysql:host=localhost;dbname=databased', 'root','plass')) {
    //                echo "connect";
    // } else {
    //             echo "Cannot connect to the DB!".$e->getFile();

    // }

