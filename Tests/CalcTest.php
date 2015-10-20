<?php

include 'Class/Calc.php';

/**
 * Description of CalcTest
 *
 * @author paulo
 */
class CalcTest extends PHPUnit_Framework_TestCase{
    
    public function testSoma(){
        $calc = new Calc();
        $this->assertTrue($calc->sum(2, 3) == 5, "Falha ao somar");
    }
    
    
    public function testDivisao(){
        $calc = new Calc();
        $this->assertTrue($calc->div(6, 2) == 3, "Falha ao dividir");
    }
    
    
}
