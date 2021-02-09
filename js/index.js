$(document).ready(function () {
    $('#sendTask').on('click', function () {
        try {
            var name = $('#name').val();
            var tel = $('#tel').val();
            $('#response').load('main.php', {'name': name, 'tel': tel});

        } catch (e) {
            alert(e);
        }
    })
});

    var tbname = 'users';

    $('#sign').on('click', function () {
        try {
            /*var name = $('#name').val();
            var tel = $('#tel').val();*/

            $('.modal-body').load('php/sign.php', { 'tbname':tbname });

            alert("ok");

        } catch (e) {
            alert(e);
        }
    })


function  foo(){

}
var var1;
function  loading() {
    document.getElementById("sendResp").onclick = function () {

        try {


            $('#resp').load('php/getInfo.php', { 'var': var1 });




                alert(var1);




        } catch (e) {
            alert(e);
        }
    };

    }


$(document).ready(function () {
    $('#rmbr').on('click', function () {
        try {
            var worf = $('#idforword').val();
            $('#response').load('../php/remembering.php', {'id': worf});

        } catch (e) {
            alert(e);
        }
    })
});