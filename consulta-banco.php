<?php function listaProdutosHeader($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select * from produto");
    while ($produto = mysqli_fetch_assoc($resultado)) {
      array_push($produtos, $produto);
    }
    return $produtos;
  }

  function listaTipoHeader($conexao) {
    $tipos = array();
    $resultado = mysqli_query($conexao, "select * from tipo");
    while ($tipo = mysqli_fetch_assoc($resultado)) {
      array_push($tipos, $tipo);
    }
    return $tipos;
  }

  function listaPlataformaHeader($conexao) {
    $plataformas = array();
    $resultado = mysqli_query($conexao, "select * from plataforma");
    while ($plataforma = mysqli_fetch_assoc($resultado)) {
      array_push($plataformas, $plataforma);
    }
    return $plataformas;
  }