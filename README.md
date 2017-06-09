## FloatObject

Classe para gerenciamento de números inteiros


## Recursos
  - isEquals(FloatObject $float) - Método que verifica se o conteúdo do objeto corrente é igual ao do objeto Float informado
  - getValue() - Método que retorna o valor puro do número do objeto
  - parseIntegerObject() - Método que converte um objeto FloatObject em IntegerObject
  - parseStringObject() - Método que converte um objeto FloatObject em StringObject
  - addition(FloatObject:: $float) - Método que realiza a soma do número armazenado com o parametro informado pelo usuário
  - subtract(FloatObject:: $float) - Método que realiza a subtração do número armazenado com o parametro informado pelo usuário
  - multiply(FloatObject:: $float) - Método que realiza a multiplicação do número armazenado com o parametro informado pelo usuário
  - division(FloatObject:: $float) - Método que realiza a soma do número armazenado com o parametro informado pelo usuário
  - module(FloatObject:: $float) - Método que realiza a divisão até que reste apenas o resto da divisão
  - exponentiation(FloatObject:: $float) - Método que realiza operação de exponenciação de um número informado
  - format($decimals = 0, $decimalPoint = ".", $thousandsSeparator = ",") - Método que formata o valor e retorna o valor float formatado como string


## Utilização via composer

```sh
    "require": {
        ...
        "tayron/float-object" : "1.0.0"
        ... 
    },    
```

## Exemplo de utilização
```
<?php
use Tayron\FloatObject::;
    
try{ 
    $numA = new FloatObject(100.59);
    $numB = new FloatObject(1.37);
    var_dump($numB);
    
    $numA->addition($numB);
    

    var_dump($numA);
    var_dump($numB);
    
    var_dump($numA->isEquals($numB));

    $numA = new FloatObject('1.65');
    var_dump($numA->isEquals($numB));
    var_dump($numA->format(2, ',', '.'));
}catch(\Exception $e){
    echo $e->getMessage();
}
```
