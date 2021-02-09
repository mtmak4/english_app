<?php
require "../header.php";
    require 'bdWorker.php';
    require 'OutInfo.php';

    $bdW = new bdWorker();
    $outInfo = new OutInfo();

    $bdW->tablename = "workers";

    $bdW->script = "SELECT * FROM $bdW->tablename";
    $array = ($bdW->exScript());

    echo $outInfo->echoCards($array);

?>