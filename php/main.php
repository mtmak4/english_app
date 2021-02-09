<?php
    require 'connect.php';
    //echo $_POST['name']. '<br>'. $_POST['tel'];
    $name = $_POST['name'];
    $tel = $_POST['tel'];
/*    $query = "INSERT INTO `info`(`name`, `telephone`) VALUES('$name', '$tel')";


    $answer = $pdo->exec($query_get);*/
    $query_get = 'SELECT `telephone` FROM `info` WHERE `id`=1';
    $worker = $pdo->prepare($query_get);
    $worker->execute();


    $data =$worker->fetch();
    echo $data[0];
    foreach ($data as $item) {
        echo $item;
    }




?>
