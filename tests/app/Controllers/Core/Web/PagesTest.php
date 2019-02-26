<?php

class PagesTest extends PHPUnit\Framework\TestCase
{
   public function testRenderReturnsHelloDevs()
   {
       
        $pages = new \Controllers\Core\Web\Pages();
       
        $expected = 'Hello Devs';
       
        $this->assertEquals($expected, $pages->render());
       
   } 
    
   public function testReturnTrueReturnsTrue()
   {
       
        $pages = new \Controllers\Core\Web\Pages();
         
        $this->assertTrue($pages->returnTrue());    
       
   } 
}

