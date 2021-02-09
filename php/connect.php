<?php



    try {
        $pdo = new PDO('mysql:host=localhost;dbname=info', 'root', 'root');

    } catch (Exception $e) {
        echo $e->getMessage();
    }

    echo "ok";

?>