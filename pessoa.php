<?php
	

 class pessoa{
	private $nome;
	private $idade;
	private $end;
	

	public function __construct($nome,$idade,$end){

		$this->nome = $nome;
		$this->idade = $idade;
		$this->end = $end;

	} 

	public function setNome($Nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setIdade($Idade){
		$this->idade = $idade ;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function setEnd($End){
		$this->end = $end;
	}

	public function getEnd(){
		return $this->end;
	}

	public function __toString(){
		$resultado =
		"Nome :" .$this->nome."<br>".
		"Idade :" .$this->idade."<br>".
		"Endereço:" .$this->end."<br>";
		
		return $resultado;
	}
}

?>