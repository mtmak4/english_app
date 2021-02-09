<?php

require "Word.php";
require "bdWorker.php";

$textwork = fopen("../files/8000.txt", 'r');
$bdworker = new bdWorker();
$bdworker -> tablename = 'word';
while (!feof($textwork)){
    $line = fgets($textwork);
    $word = new Word();
    $parts = explode('--',$line);
    /*foreach ($parts as $item) {
        $isru = preg_match('/\p{Cyrillic}/u', $item);
        if ($isru){
            $word->transl.= $item.' ';
        }
        else{
            $word->eng_word.= $item.' ';
        }
    }*/


    $word->eng_word=$parts[0];
    $word->transl=$parts[1];
    $i = "INSERT INTO word(`Eng_word`, `Translation`, `types`) values('$word->eng_word', '$word->transl', 'most_pop')";
    $bdworker->script = $i;
    $bdworker->exScript();
    echo $i. '<br>';
}

fclose($textwork);

//DELETE FROM `word` WHERE `types` = 'most_pop'
?>