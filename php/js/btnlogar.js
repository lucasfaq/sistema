/*eslint-disable*/
/*jslint browser: true*/
/*global $, jQuery, alert, dados:true, vazios:true,validarformvazio*/
$(document).ready(function () {
    'use strict';
    $('#logar').click(function () {

        var dados = $('#login').serialize();
        
        $.ajax({
            type: "POST",
            data: dados,
            url: "../procedimentos/logarusuario.php",
            success: function (r) {
                if (r === "funcionou") {
                    window.location = "../pages/paginicial.php";
                }
            }
        });
    });
});