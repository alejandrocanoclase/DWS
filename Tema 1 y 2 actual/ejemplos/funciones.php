<?php

function getParameter($parameter){

    $vocales = ['a','e','i','o','u'];

    if(empty($_GET[$parameter])){
        echo 'EL PARAMETRO ESTÁ VACIO';
    }else{
        if (in_array($_GET[$parameter], $vocales)){
            echo 'ES UNA VOCAL';
        }else{
            echo'NO ES UNA VOCAL';
        }
    }
}

