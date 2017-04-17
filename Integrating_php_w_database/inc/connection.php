<?php
try {
        $db = new PDO('mysql:host=localhost;dbname=database', 'root','plass');
        var_dump($db);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connected to Database";
} catch (Exception $e) {
    echo "Cannot connect to the DB! <br>";
    // echo $e->getMessage();    
    // echo $e->getFile();
    exit;
}

try {
    $results = $db->query("SELECT title, category,img FROM Media");
    echo "<br> Retrieved results successfully"; 
} catch (Exception $e) {
    echo "<br> Unable to retrieve results";
    exit;
}

var_dump($results->fetchAll(PDO::FETCH_ASSOC));

    // if( $db = new PDO('mysql:host=localhost;dbname=databased', 'root','plass')) {
    //                echo "connect";
    // } else {
    //             echo "Cannot connect to the DB!".$e->getFile();

    // }

?>