<?php

    include "connect.php";

    $dictUsers = [
        'name'=>'имя',
        'telephone'=>'телефон'];

    $dictThings = [
        'name'=>'имя'
    ];

    $dict=[
        'users'=>$dictUsers,
        'things'=>$dictThings
    ];





    $tbname = $_POST['tbname'];
    $query = "SHOW COLUMNS FROM `$tbname`";

        $worker = $pdo->prepare($query);
        $worker->execute();

      /*  $unps = '<div class="input-group w-50 mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text" >Name</span>
        </div>
        <input class="form-control" type="tel" id="name" placeholder="Name">
        </div>';*/

        function setvalue($arg,$dict, $tbname, $keyItem){


            $word = $arg;



            if( $dict[$tbname][$keyItem] ){
                $word = $dict[$tbname][$keyItem];

            }
            
            $unps = "<div class='input-group w-50 mb-4'>
            <div class='input-group-prepend'>
                <span class='input-group-text' >$word</span>
            </div>
            <input class='form-control' type='tel' id='$word' placeholder=$word>
            </div>";
            return $unps;
            //echo $unps;
        }

        $data =$worker->fetchAll();
        //echo var_dump($data);
        $i = 0;

        foreach ($data as $item) {
            if($i==0){
                $i++;
                continue;
            }
           echo setvalue($item[0], $dict, $tbname,$item[0]);

        }

        


?>
