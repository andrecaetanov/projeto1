<?php
require_once("conecta.php");

function listaTipos($conexao) {
    $tipos = array();
    $resultado = mysqli_query($conexao, "select * from tipo ");

    while($tipo = mysqli_fetch_assoc($resultado)) {
        array_push($tipos, $tipo);
    }

    return $tipos;
}

function insereTipo($conexao, $nome) {
    $query = "insert into tipo (nome)
        values ('{$nome}')";
    return mysqli_query($conexao, $query);
}

function alteraTipo($conexao, $id, $nome) {
    $query = "update tipo set nome = '{$nome}' where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function removeTipo($conexao, $id) {
    $query = "delete from tipo where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaTipo($conexao, $id) {
    $query = "select * from tipo where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
