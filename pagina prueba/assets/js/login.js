$('#submitBtnLogin').click(function () {
    var username = $('#username').val();
    var password = $('#password').val();
        $.ajax({
            url: "assets/gets/getlogin.php",
            type: "POST",
            data: {username: username, password: password},
            success: function (data) {
                alert(data);
                if (data == 'No') {
                    alert("Error en usuario o contraseña");
                } else {
                    $('#myModallogin').hide();
                    location.reload();

                }
            }
        });
});
