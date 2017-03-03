<?php
namespace Tayron;

use \InvalidArgumentException;

/**
 * Classe para gerenciamento de números com casa decimal
 * 
 * @author Tayron Miranda <dev@tayron.com.br>
 */
class FloatObject
{
    /**
     * Atributo que armazena um número
     * 
     * @var integer
     */
	private $float;

    /**
     * FloatObject::__construct
     * 
     * Armazena o parametro informado pelo usuário como inteiro
     * 
     * @param float $float Número informado pelo usuário
     * @throws InvalidArgumentException Dispara uma exceção caso o parametro informado não seja um número
     * 
     * @return void
     */
	public function __construct($float)	
	{
		if(!is_numeric($float)){
			throw new InvalidArgumentException('Não é possível criar objeto com parametro informado, o parametro informado não é um número');
		}
		
		$this->float = (float)$float;
	}
	
    /**
     * FloatObject::isEquals
     * 
     * Método que verifica se o conteúdo do objeto corrente é igual ao do objeto Float informado
     * 
     * @param FloatObject $float Objeto Float informado pelo usuário
     * 
     * @return boolean Retorna true se o conteúdo for igual ou false
     */
	public function isEquals(FloatObject $float)
	{
		return ($this->getValue() === $float->getValue());
	}
	
    /**
     * FloatObject::parseIntegerObject
     * 
     * Método que converte um objeto FloatObject em IntegerObject
     * 
     * @return IntegerObject Objeto convertido em IntegerObject
     */
	public function parseIntegerObject()
	{
	    return new IntegerObject($this->float);
	}
	
    /**
     * FloatObject::parseStringObject
     * 
     * Método que converte um objeto FloatObject em StringObject
     * 
     * @return IntegerObject convertido em StringObject
     */
	public function parseStringObject()
	{
	    return new StringObject($this->float);
	}
    
    /**
     * FloatObject::addition
     * 
     * Método que realiza a soma do número armazenado com o parametro informado pelo usuário
     * 
     * @param IntegerObject $float Número a ser somado
     * 
     * @return void
     */
	public function addition(FloatObject $float)
	{
	    $this->float = $this->float + $float->getValue();
	}
	
    /**
     * FloatObject::subtract
     * 
     * Método que realiza a subtração do número armazenado com o parametro informado pelo usuário
     * 
     * @param IntegerObject $float Número a ser usado na operação
     * 
     * @return void
     */
	public function subtract(FloatObject $float)
	{
	    $this->float = $this->float - $float->getValue();
	}	
    
    /**
     * FloatObject::multiply
     * 
     * Método que realiza a multiplicação do número armazenado com o parametro informado pelo usuário
     * 
     * @param IntegerObject $float Número a ser usado na operação
     * 
     * @return void
     */
	public function multiply(FloatObject $float)
	{
	    $this->float = $this->float * $float->getValue();
	}    
    
    /**
     * FloatObject::division
     * 
     * Método que realiza a divisão do número armazenado com o parametro informado pelo usuário
     * 
     * @param IntegerObject $float Número a ser usado na operação
     * @throws InvalidArgumentException Dispara uma exceção caso o parametro informado seja 0
     * 
     * @return void
     */
	public function division(FloatObject $float)
	{
		if($float->isEquals(new FloatObject(0))){
			throw new InvalidArgumentException('Não foi possível dividir pelo o valor, pois o parametro informado é 0');
		}
		
	    $this->float = $this->float / $float->getValue();
	}    
    
    /**
     * FloatObject::module
     * 
     * Método que realiza a divisão até que reste apenas o resto da divisão
     * 
     * @param IntegerObject $float Número a ser usado na operação
     * 
     * @return void
     */    
    public function module(IntegerObject $float)
    {
        $this->float %= $float->getValue();
    }
    
    /**
     * FloatObject::module
     * 
     * Método que realiza operação de exponenciação de um número informado
     * 
     * @param IntegerObject $integer Número a ser usado na operação
     * 
     * @return void
     */   
    public function exponentiation(IntegerObject $integer)
    {
        $this->float **= $integer->getValue();
    }
    
    /**
     * FloatObject::getValue
     * 
     * Método que retorna o valor puro do número do objeto
     * 
     * @return integer Valor do conteúdo do objeto em texto
     */
    public function getValue()
    {
        return (float)$this->float;
    }
    
    /**
     * FloatObject::format
     * 
     * Método que formata número float
     * 
     * @param int $decimals Número de casas decimais
     * @param string $decimalPoint Stirng separadora de casa decimal
     * @param string $thousandsSeparator Stirng separadora de casa milhar
     * 
     * @return String Versão formatada do valor atual
     */
    public function format($decimals = 0, $decimalPoint = ".", $thousandsSeparator = ",")
    {
        return (string)number_format($this->getValue(), $decimals, $decimalPoint, $thousandsSeparator);
    }

    /**
     * FloatObject::__toString
     * 
     * Método que retorna o valor do conteúdo do objeto em forma de texto
     * 
     * @return string Valor do conteúdo do objeto em texto
     */
	public function __toString()
	{
		return (string)$this->float;
	}	
}