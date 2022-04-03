/*************************************
*  Login.Js                     
*                                  
*  Created by Ferdy Rahmat R.      
*  on 2 April 2022                
*                                  
*************************************/
$('#btn').attr("disabled", true);

document.getElementById("nik").addEventListener('input', checkNIK);

/** Check NIK */
function checkNIK() {
    var nik = $("#nik").val();
    var countNIK = nik.length;

    if (countNIK < 16) {
        $('#btn').attr("disabled", true);

        document.getElementById("nama").classList.remove('animated', 'fadeInUp');
        document.getElementById("nama").classList.add('animated', 'fadeOutDown');

        var get = document.getElementsByClassName('animated fadeOutDown');

        function removeAnimate() {
            if (get.length > 0) {
                document.getElementById("nama").classList.remove('animated', 'fadeOutDown');
                document.getElementById("nama").style.display = "none";
            }
        }

        setTimeout(removeAnimate, 500);
    } else if (countNIK == 16) {
        $.ajax({
            url: "masuk/cek-nik",
            method: "POST",
            data: "nik=" + nik,
            dataType: "JSON",
            success: function (response) {
                if (response.status == "success") {
                    $('#btn').attr("disabled", false);

                    document.getElementById("nama").style.display = "block";
                    document.getElementById("nama").classList.add('animated', 'fadeInUp');

                    document.getElementById("nama").value = response.nama;
                }
            },
            error: function () {
                console.log("error nih bangg");
            }
        })
    }
}

function checkAnimate() {
    var cek = document.getElementsByClassName('fadeInUp');

    if (cek.length > 0) {
        document.getElementById("nama").style.display = "block";
        document.getElementById("nama").classList.add('animated', 'fadeInUp');
    }
}

setInterval(checkAnimate);