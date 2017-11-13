<?php 
function listaProdutos($conexao) {
  $produtos = array();
  $resultado = mysqli_query($conexao, "select p.*,pl.nome as plataforma_nome, t.nome as tipo_nome from produto as p join plataforma as pl on pl.id=p.plataforma_id join tipo as t on t.id=p.tipo_id order by p.id desc");
  while ($produto = mysqli_fetch_assoc($resultado)) {
    if ($produto['usado']==0) {
      $produto['usado'] = "Não";
    } else {
      $produto['usado'] = "Sim";
    }
    if ($produto['disponivel']==0) {
      $produto['disponivel'] = "Não";
    } else {
      $produto['disponivel'] = "Sim";
    }
    array_push($produtos, $produto);
  }
  return $produtos;
}

function listaTipo($conexao) {
  $tipos = array();
  $resultado = mysqli_query($conexao, "select * from tipo");
  while ($tipo = mysqli_fetch_assoc($resultado)) {
    array_push($tipos, $tipo);
  }
  return $tipos;
}

function listaPlataforma($conexao) {
  $plataformas = array();
  $resultado = mysqli_query($conexao, "select * from plataforma");
  while ($plataforma = mysqli_fetch_assoc($resultado)) {
    array_push($plataformas, $plataforma);
  }
  return $plataformas;
}

function insereProduto($conexao, $nome, $preco, $descricao, $data_lancamento, $plataforma, $tipo, $usado, $disponivel, $imagem) {
  $query = "INSERT INTO produto (nome, preco, descricao, data_lancamento, plataforma_id, tipo_id, usado, disponivel, imagem) VALUES ('{$nome}', {$preco}, '{$descricao}', '{$data_lancamento}', {$plataforma}, {$tipo}, {$usado}, {$disponivel}, '{$imagem}') ";
  return mysqli_query($conexao, $query);
}

function listaColunaTabela($conexao) {
  $colunas = array();
  $query = "SHOW COLUMNS FROM produto";
  $resultado = mysqli_query($conexao, $query);
  while ($coluna = mysqli_fetch_assoc($resultado)) {
    array_push($colunas, $coluna);
  }
  return $colunas;
}

function removeProduto($conexao, $id) {
    $query = "delete from produto where id = {$id}";
    return mysqli_query($conexao, $query);
}

function getProduto($conexao, $id) {
  $query = "select * from produto where id = {$id}";
  $resultado = mysqli_query($conexao, $query);
  $produto = mysqli_fetch_assoc($resultado);
  return $produto;
}

function getImagem($conexao, $id) {
  $query = "select imagem from produto where id = {$id}";
  $resultado = mysqli_query($conexao, $query);
  $imagem = mysqli_fetch_assoc($resultado);
  return $imagem;
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $data_lancamento, $plataforma, $tipo, $usado, $disponivel, $imagem) {
  $query = "update produto set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', data_lancamento = '{$data_lancamento}', plataforma_id = {$plataforma}, tipo_id = {$tipo}, usado = {$usado}, disponivel = {$disponivel}, imagem = '{$imagem}' where id = '{$id}' ";
  return mysqli_query($conexao, $query);
}