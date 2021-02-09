<?php
require "bdWorker.php";
$is_right = $_POST["is_right"];
$id_word = $_POST["id_word"];

if ($is_right == "true"){

}
else{


    $bdworker = new bdWorker();
    $i = "DELETE FROM `remembering_word` WHERE `id_word` = '$id_word' ";
    $bdworker->script = $i;
    $data = $bdworker->exScript();
}



?>

