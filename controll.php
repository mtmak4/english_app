


<?php

require 'header.php';
require 'php/bdWorker.php';

$bdw = new bdWorker();
$i = "SELECT * from `word` WHERE id IN(SELECT id_word FROM `remembering_word` WHERE id_users = 6 ORDER BY RAND()) order by rand() LIMIT 1";
$bdw->script = $i;
$data = $bdw->exScript();
$word_id = $data[0]["id"];


$engzn = $data[0]["Eng_word"];
$ruszn = $data[0]["Translation"];



$i = "SELECT Translation FROM `word` ORDER BY RAND() LIMIT 3 ";
$bdw->script = $i;
$data = $bdw->exScript();

$answers = array($ruszn, $data[0]['Translation'],$data[1]['Translation'],$data[2]['Translation']);

shuffle ($answers);

echo "
<form action='controll.php' method='get' id='form'>
№<span id='word_id'> $word_id</span>
<span id='eng'>$engzn</span>
<br>
<span id='ru' style='display: none;'>$ruszn</span><br>
<span id='result'></span>
<input type='radio' name='answers' checked='0' id=$answers[0]><span>$answers[0]</span><br>
<input type='radio' name='answers' checked='0' id=$answers[1]><span>$answers[1]</span><br>
<input type='radio' name='answers' checked='0' id=$answers[2]><span>$answers[2]</span><br>
<input type='radio' name='answers' checked='0' id=$answers[3]><span>$answers[3]</span><br>

    <input type='button' id='rmbr' value='Next...'>
    
    
    
</form>
<script src='js/control.js'></script>";


?>

