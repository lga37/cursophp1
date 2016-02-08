<?php

class Produto {
	public $nome;
	public $preco;
	public $estoque=0;
	
	public function __construct($nome,$preco,$estoque){
		$this->nome = $nome;
		$this->preco = $preco;
		$this->estoque = $estoque;
	}
	
	public function getDisponibilidade(){
		if($this->estoque > 0){
			$disponibilidade = "pronta-entrega";
		} else {
			$disponibilidade = "fora de estoque";
		}
	}
	
}

$p = new Produto("Geladeira Xpto",1234.55,3);
echo $p->nome;
echo $p->preco;
echo $p->getDisponibilidade();