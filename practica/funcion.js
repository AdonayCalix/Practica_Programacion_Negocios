$(function () {
    $("#enviar").click(function () {
        $.ajax({
            type: 'post',
            url: 'guardar.php',
            data: $("#formulario").serialize(),
            success: function (data) {
                if (data == 'ok') {
                    alert("Se guardardo con exito la información");
                } else {
                    alert("No se guardo con exito la información");
                }
            }
        })
    })

    $.post('departamentos.php').done(function (respuesta) {
        $("#departamento").html(respuesta);
    })

    $("#departamento").chance(function () {
        var departamento = $(this).val();

        $.post('municipio', {
            departamento: departamento
        }).done(function (respuesta) {
            $("#municipio").html(respuesta);
        })
    })
})

