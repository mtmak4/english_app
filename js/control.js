
$(document).ready(function() {
    $('#rmbr').on("click",function() {
        let selelem = $('input[name=answers]:checked').attr('id');
        let relem = ($('#ru').html());
        // alert(selelem +' '+ relem);

        let is_right;
        if(relem.includes(selelem)){
            is_right = true;
            $('form').css('background','green');

        }
        else{
            is_right = false;
            $('form').css('background','red');
        }


        $.ajax(

            'php/chekans.php', {
                type: "POST",
                data:{ch: $('input[name=answers]:checked').attr('id'),
                ra: getCookie("cookie"),
                    is_right: is_right,
                    id_word: $('#word_id').html()
                },

                success: function(data) {
                    for(var i=0; i<700; i++){
                        console.log(i);
                    }

                    window.location.href = 'http://localhost/learnEnglishApp/controll.php';

                },
                error: function() {
                    alert('There was some error performing the AJAX call!');
                }
            }

        )
    });
});

function funn() {

}


function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
