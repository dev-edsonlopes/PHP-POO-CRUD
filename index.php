<?php

require_once 'vendor\autoload.php';

$produto = new \App\Model\Produto();
$produto->setId(2);
$produto->setNome('Samsung A21s');
$produto->setDescricao('128gb 4gb');

$produtoDao = new \App\Model\ProdutoDao();

//create
// $produtoDao->create($produto);

//update
$produtoDao->update($produto);

//read
$produtoDao->read();
foreach($produtoDao->read() as $produto) {
    echo $produto['nome']." | ".$produto['descricao']."<hr />";
}

