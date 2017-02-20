<?php
require_once('vendor/autoload.php');

use Tayron\FloatObject;

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
}catch(\Exception $e){
    echo $e->getMessage();
}