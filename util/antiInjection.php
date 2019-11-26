<?php

function anti_injection($string) {
    // remove palavras que contenham sintaxe sql e javascript
    $string = preg_replace("/(from|select|insert|delete|where|drop|drop table|show|show tables|FROM|SELECT|INSERT|DELETE|WHERE|DROP|SHOW|;|#|\*|--|\\\\)/", "", $string);
    $string = trim($string); //limpa espaÃ§os vazio
    $string = strip_tags($string); //tira tags html e php
    $string = (get_magic_quotes_gpc()) ? $string : addslashes($string); //Adiciona barras invertidas a uma string
    return $string;
}
