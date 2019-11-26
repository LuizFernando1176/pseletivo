<?php

include_once 'util/conectarBD.php';

function selectCargo() {
    $retorno = "<select class='form-control' style='width:50%' name='id_cargo'>"
    ."<option >Selecione o cargo</option>";
    $con = conecta();
    $consulta = "SELECT * FROM tb_cargo;";
    $cargos = mysqli_query($con, $consulta);
    if ($cargos != false) {
        while ($cargo = mysqli_fetch_assoc($cargos)) {
            $retorno .= "<option value='" . $cargo['id'] . "'>" . $cargo['cargo'] . "</option>";
        }
    }

    $retorno .= "</select><br>";
    return $retorno;
}
