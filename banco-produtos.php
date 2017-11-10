<?php
	function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*,t.nome as tipo_nome,pl.nome as plataforma_nome from produto as p join tipo as t on t.id=p.tipo_id join plataforma as pl on pl.id=p.plataforma_id order by p.id desc limit 3,6");
    $i;
   		while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
}
function listaSlides($conexao) {
   $produtos = array();
    $resultado = mysqli_query($conexao, "select p.nome from produto as p order by p.id desc limit 3");
    $i;
   		while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
}
