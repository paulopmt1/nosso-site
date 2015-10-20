<?php

include 'Class/MenuPrincipal.php';

/**
 * Description of CalcTest
 *
 * @author paulo
 */
class MenuPrincipalTest extends PHPUnit_Framework_TestCase{
    
    public function testMenuTemItens(){
        $menu = new MenuPrincipal();
        $itens = $menu->getMenuItems();
        
        $this->assertTrue(count($itens) > 0, "Nenhum ítem encontrado na classe no menu principal");
    }
    
}
