<?php
/**
 * Referência: https://phpunit.de/manual/3.7/en/writing-tests-for-phpunit.html#writing-tests-for-phpunit.assertions.assertTag
 */


class SiteTest extends PHPUnit_Framework_TestCase
{
    private $urlBaseSite = 'http://localhost/phptesting/';
    
    
    public function testValoresSaoIguais()
    {
        $this->assertEquals(3, 3, "Números são diferentes");
    }
    
    public function testBoleano()
    {
        $this->assertTrue(1 == 1, "Sentença deu falso");
    }
    
    
    
    public function testTituloEstaAparecendo(){
        $html = $this->obtemHtml('index.php');
        
        $matcher = array(
            'tag' => 'h1', 
            'content' => 'Minha página'
        );
        
        // Verifica no html se menu principal está aparecendo
        $this->assertTag($matcher, $html, "Título não está aparecendo");
    }
    
    
    public function testTemIdMenuPrincipal(){
        $id = 'menu-principal';
        
        $matcher = array(
            'id' => $id
        );
        
        $html = $this->obtemHtml('index.php');
        
        // Verifica no html se tem algum elemento com id menu-principal
        $this->assertTag($matcher, $html, "Id $id não encontrado");
    }
    
    
    public function testTemPeloMenos2ItensNoMenuEMenosQue5(){
        $matcher = array(
            'tag'      => 'ul',
            'children' => array(
              'less_than'    => 5,
              'greater_than' => 2,
              'only'         => array('tag' => 'li')
            )
        );
        
        $html = $this->obtemHtml('index.php');
        
        // Verifica no html se tem algum elemento com id menu-principal
        $this->assertTag($matcher, $html, "Não foram encontrados pelo menos 2 itens do menu");
        
    }
    
    
    
    
    
    
    private function obtemHtml($file){
        $url = $this->urlBaseSite . $file;
        $html = @file_get_contents($url);
        
        // Garante que obteve algo na url acima
        if ($html === false){
            echo "\nNão encontrei nenhum HTML na url: $url\n\n";
            
            // Encerra execução do código php
            exit();
        }
        
        // Para exibir o conteúdo html vindo da página
        //print_r($html);
        
        // Retorna string do html
        return $html;
    }
    
    
    
}
?>