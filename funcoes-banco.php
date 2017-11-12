<?php


function getProdutos($conexao){
  $query = "SELECT * FROM produto";
  $resultado = mysqli_query($conexao, $query);
  
  $produtos = array();

  while ( $produto = mysqli_fetch_assoc($resultado) ){
    array_push($produtos, $produto);
  }
  
  return $produtos;

}


function getCategorias($conexao){
  $query = "SELECT * FROM plataforma";
    
  $resultado = mysqli_query($conexao, $query);
  
  $categorias = array();

  while ($categoria = mysqli_fetch_assoc($resultado)){
    array_push($categorias, $categoria);
  }
  
  return $categorias;
}




function buscaAvancada($conexao, $busca_desejada){

  $resultado = mysqli_query($conexao, $busca_desejada);

  $produtos = array();
  
    while ( $produto = mysqli_fetch_assoc($resultado) ){
      array_push($produtos, $produto);
    }
    
    return $produtos;

}

function getNomePlataforma($conexao, $produto){
  
  $query = "SELECT * FROM plataforma WHERE plataforma.id = {$produto['plataforma_id']}";

  $resultado = mysqli_query($conexao, $query);

  
  $plataforma = array();
  
  while ( $produto = mysqli_fetch_assoc($resultado) ){
    array_push($plataforma, $produto);
  }
  
  echo($produto);
   
  return $plataforma;

}

function getUsuarios($conexao){
  $query = "SELECT * FROM usuario";

  $resultado = mysqli_query($conexao, $query);
  
  $usuarios = array();
  
  while ( $usuario = mysqli_fetch_assoc($resultado) ){
    array_push($usuarios, $usuario);
  }

  return $usuarios;

}

function insereUsuario($conexao, $login, $senha){

  $query = "INSERT INTO usuario (login, senha) VALUES ('{$login}', '{$senha}')";

  return mysqli_query($conexao, $query);

}

function removeUsuario($conexao, $id){
  $query = "DELETE FROM usuario WHERE id = {$id}";

  return mysqli_query($conexao, $query);

}


function listaProdutosDeProdutos($conexao) {
  $produtos = array();
  $resultado = mysqli_query($conexao, "select p.*,t.nome as tipo_nome,pl.nome as plataforma_nome from produto as p join tipo as t on t.id=p.tipo_id join plataforma as pl on pl.id=p.plataforma_id order by p.id desc");
  $i;
     while($produto = mysqli_fetch_assoc($resultado)){
      array_push($produtos, $produto);
  }
  return $produtos;
}

function getUsuarioPeloId($conexao, $id){
  $query = "SELECT * FROM usuario WHERE id = {$id}";

  $resultado = mysqli_query($conexao, $query);

  while($usuario = mysqli_fetch_assoc($resultado)){
    return $usuario;
  }
 
}

function alteraUsuario($conexao, $login, $senha, $id){
  $query = "UPDATE usuario SET login = '{$login}', senha = '{$senha}' WHERE id = {$id}";

  mysqli_query($conexao, $query);
}