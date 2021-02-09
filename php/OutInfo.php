<?php
    require "../header.php";

class OutInfo
{


    public function echoCards($array){

        $pubOutput = "";

     $arrayCount=count($array);


        foreach ($array as $item) {

         /*   $path = "img/";
            $pic_title = null;
           /* echo $item[0]."   ";*/
            /*    if( file_exists("img/1.png" )){
                    $pic_title ="img/1.png";// $path.$item[0]."png";
                }
                else{
                    $pic_title = "img/default.png";
                }*/



                $pubOutput .= "<div class='card' style='width: 18rem;'>
            <img class='card-img-top' src='img/$item[0].png' alt='Card image cap'>
            <div class='card-body'>
                <h5 class='card-title'>" .$item[1] . "</h5>
                <p class='card-text'>" . $item[2]. "</p>
            </div>
            </div>";

        }

    return $pubOutput;
    }


    public static function echoTag($tagName, $attr, $innerHTML, $type=""){

        $result = null;

        if($tagName == "input"){

            $result = "<input $attr value=$innerHTML type=$type>";
        }
        else{

            $result = "<h1 $attr type=$type>$innerHTML</h1>";
        }

        echo $result;
    }

}




/*$OutInfo = new OutInfo();*/
OutInfo::echoTag("input", "", "value...", "");

