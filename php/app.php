<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('#rmbr').on('click', function () {

            try {
                var worf = $('#idforword').text();

                $('#response').load('remembering.php', {'id': worf});


            } catch (e) {
                alert(e);
            }
        })
    });
</script>
<?php
require "../header.php";
require "bdWorker.php";

$bdworker = new bdWorker();
$i = "SELECT * FROM `word` WHERE id NOT IN(SELECT id FROM `remembering_word`) ORDER BY RAND() LIMIT 1";
$bdworker->script = $i;
$data = $bdworker->exScript();
//var_dump($data);
$engzn = $data[0]["Eng_word"];
$ruszn = $data[0]["Translation"];

$id_word = $data[0]['id'];
$i = "INSERT INTO `remembering_word`(id_users, id_word) VALUES ('6', '$id_word')";
echo $i;
$bdworker->exScript2($i);
//header(location: "index.php);

echo "
<form action='app.php' method='get'>
<span id='response'></span>
<span id='idforword'>$id_word</span>
<span id='eng'>$engzn</span>
<br>
<span id='ru'>$ruszn</span><br>
    <input type='button' id='rmbr' value='remember...'><br><br>
    <input type='submit' value='Next...'>
</form>


";


$count_words = $bdworker->exScript2("SELECT COUNT(*) AS 'l_word' FROM `remembering_word` ");
$count = $count_words[0]['l_word'];

echo  "<span id='lw'>вы запомнили: $count</span>"
//SELECT COUNT(*) FROM `remembering_word`
?>