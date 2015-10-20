<?php

/**
 * Description of MenuPrincipal
 *
 * @author paulo
 */
class MenuPrincipal {
    
    
    /**
     * Obtém lista de ítens do menu principal do site
     * @return Array
     */
    public function getMenuItems(){
        $menuItems = array();
        
        $menuItems[] = array(
            'id'    => 1,
            'link'  => 'index.php',
            'nome'  => 'HOME'
        );
        $menuItems[] = array(
            'id'    => 2,
            'link'  => 'produtos.php',
            'nome'  => 'PRODUTOS'
        );
        
        return $menuItems;
    }
}
