<?php

require "bdWorker.php";


$id_word = $_POST['id'];

$i = "INSERT INTO `remembering_word`(id_users, id_word) VALUES ('6', '$id_word')";



    $pdo = new PDO("mysql:host=localhost;dbname=englandapp", "root", "root");




        $worker = $pdo->prepare($i);
        $worker->execute();
        $data = $worker->fetchAll();
?>