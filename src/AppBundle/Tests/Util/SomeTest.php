<?php

use Symfony\Framework\TestCase;
use AppBundle\Util\Some;

class SomeTest extends TestCase{
    
    public function testSome(){
        
        $some = new Some();
        
        assertEquals(1,some.getSome());
        
    }
    
    
}
