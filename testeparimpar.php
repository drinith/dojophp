<?php
require_once "parimpar.php";

class ParImparTest extends PHPUnit_Framework_TestCase
{

	//Módulo de  Testes     
	public function testNumeroUm(){
	
		//Instanciando a classe ParIMpar que terá seu método testado que será testada
		$par = new ParImpar();	
		
		//testando se "um" é impar através do método verTipo da classe ParImpar
		$this->assertEquals("impar",$par->verTipo(1));
        
    }

    //Módulo de  Testes     
	public function testNumeroDois(){

		//Instanciando a classe ParIMpar que terá seu método testado que será testada
		$par = new ParImpar();	
		
		//testando se "dois" é impar através do método verTipo da classe ParImpar
		$this->assertEquals("impar",$par->verTipo(2));
        
    }
	
	public function testNumerotres(){
	
		//Instanciando a classe ParIMpar que terá seu método testado que será testada
		$par = new ParImpar();	
		
		//testando se "três" é impar através do método verTipo da classe ParImpar
		$this->assertEquals("impar",$par->verTipo(3));
			        
        
    }
	    
}

?>