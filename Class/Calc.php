<?php


/**
 * Description of Calc
 *
 * @author paulo
 */
class Calc {
    
    /**
     * Soma dois números
     * @param type $a
     * @param type $b
     * @return int
     */
    public function sum($a, $b){
        return $a + $b;
    }
    
    /**
     * Divide $a por $b
     * @param type $a
     * @param type $b
     * @return type
     */
    public function div($a, $b){
        if ($b == 0){
            throw new \Exception("Falha ao dividir por zero");
        }
        
        return $a / $b;
    }
}
