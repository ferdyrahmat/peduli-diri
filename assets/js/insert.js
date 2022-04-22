/*************************************
*  Insert.Js                     
*                                  
*  Created by Ferdy Rahmat R.      
*  on 5 April 2022                
*                                  
*************************************/
document.title = "PeduliDiri | Tambah Catatan Perjalanan";

$("#btn").attr("disabled", true);

document.getElementById("datepicker").addEventListener('input', checkTanggal);

function checkTanggal() {
    var tanggal = $("#datepicker").val();
    var count = tanggal.length;

    if (count < 1) {
        $("#btn").attr("disabled", true);
    } else {
        $("#btn").attr("disabled", false);
    }
}

setInterval(checkTanggal);

$(function () {
    $('#tambah-catatan').submit(function (e) {
        e.preventDefault();

        var data = $(this).serialize();

        $.ajax({
            url: $(this).attr("action"),
            method: $(this).attr("method"),
            data: data,
            dataType: "JSON",
            success: function (response) {
                if (response.status == "success") {
                    Swal.fire({
                        title: 'Berhasil',
                        text: response.msg,
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function () {
                        window.location = response.redirect;
                    })
                } else if (response.status == "failed") {
                    Swal.fire({
                        title: 'Peringatan',
                        text: response.msg,
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            },
            error: function () {
                alert('error');
            }
        })
    })
})