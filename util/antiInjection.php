<?php

function anti_injection($sql){
    // remove palavras que contenham sintaxe sql e javascript
    $sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\|<script>)/"),"",$sql);
    $sql = trim($sql);//limpa espaÃ§os vazio
    $sql = strip_tags($sql);//tira tags html e php
    $sql = addslashes($sql);//Adiciona barras invertidas a uma string
    return $sql;
}