<?php

namespace Controllers\Core\Web;

class Pages
{
    
    public function render()
    {
        return 'Hello Devs';    
    }
    
    public function returnTrue()
    {
        return true;    
    }
    
    public function returnArray()
    {
        return ['Hello', 'Devs', 'This', 'Is', 'An', 'Array'];    
    }
    
}