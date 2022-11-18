<?php
// SETS
require_once 'vendor/autoload.php';

$produtoDao = new \App\Model\ProdutoDao();

$produtoDao->read();

foreach($produtoDao->read() as $produto):
	echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;








