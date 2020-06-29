/*eslint-disable*/
/*jslint browser: true*/
/*global $, jQuery, alert, dados:true, vazios:true,validarformvazio*/
$(document).ready(function () {
    'use strict';
    $('#registrar').click(function () {

        var dados = $('#registro').serialize();
        
        $.ajax({
            type: "POST",
            data: dados,
            url: "../procedimentos/registrarusuario.php",
            success: function (r) {
                if (r === 1) {
                    alert("Inserido com Sucesso!!");
                }
            }
        });
    });
});