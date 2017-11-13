<?php
require_once("conecta.php");

function listaPlataformas($conexao) {
    $plataformas = array();
    $resultado = mysqli_query($conexao, "select * from plataforma ");

    while($plataforma = mysqli_fetch_assoc($resultado)) {
        array_push($plataformas, $plataforma);
    }

    return $plataformas;
}

function inserePlataforma($conexao, $nome) {
    $query = "insert into plataforma (nome)
        values ('{$nome}')";
    return mysqli_query($conexao, $query);
}

function alteraPlataforma($conexao, $id, $nome) {
    $query = "update plataforma set nome = '{$nome}' where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function removePlataforma($conexao, $id) {
    $query = "delete from plataforma where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaPlataforma($conexao, $id) {
    $query = "select * from plataforma where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
