/*************************************
*  Login.Js                     
*                                  
*  Created by Ferdy Rahmat R.      
*  on 2 April 2022                
*                                  
*************************************/

document.title = "PeduliDiri | Login";


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
            url: "cek-nik",
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

$(function () {
    $('#login').submit(function (e) {
        e.preventDefault();

        $("#btn").button('loading');
        document.getElementById("notif").innerHTML = "<div class='alert alert-info'>Sedang Login...</div>";

        var data = $(this).serialize();

        $.ajax({
            url: $(this).attr("action"),
            method: $(this).attr("method"),
            data: data,
            dataType: "JSON",
            success: function (response) {
                if (response.status == "success") {
                    $("#btn").button('reset');

                    document.getElementById("notif").innerHTML = "<div class='alert alert-success' id='notifBerhasil'></div>";
                    document.getElementById("notifBerhasil").innerHTML = response.msg;

                } else if (response.status == "failed") {
                    $("#btn").button('reset');

                    document.getElementById("notif").innerHTML = "<div class='alert alert-danger' id='notifGagal'></div>";
                    document.getElementById("notifGagal").innerHTML = response.msg;
                }
            },
            error: function () {
                $("#btn").button('reset');

                document.getElementById("notif").innerHTML = "<div class='alert alert-danger'>Terjadi masalah saat login, silahkan coba lagi.</div>";
            }
        })
    })
})