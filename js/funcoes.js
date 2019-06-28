/* eslint-disable*/
/*jslint browser: true*/
/*global $, jQuery*/

function validarFormVazio(formulario) {
    "use strict";
    var dados = $('#' + formulario).serialize(), d = dados.split('&'), vazios = 0, i = 0, controles;
    for (i = 0; i < d.length; i = i + 1) {
        controles = d[i].split("=");
        if (controles[1] === "A" || controles[1] === "") {
            vazios = vazios + 1;
        }
    }
    return vazios;
}