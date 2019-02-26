<?php

class PagesTest extends PHPUnit\Framework\TestCase
{
   public function testRenderReturnsHelloWorld()
   {
       
        $pages = new \Controllers\Core\Web\Pages();
       
        $expected = 'Hello World';
       
   } 
}

