<?php

function refrezcar($archivo) {
header ("Location: $archivo");
} 

function alerta($titulo, $texto, $icono) {
    return "swal({ 
        title: '$titulo',
        text: '$texto',
        icon: '$icono',
    })";
}$script_alerta = "";