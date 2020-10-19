<?php
/*require_once './userTask.php';

use PHPUNIT\Framework\TestCase;

class taskOneTest extends TestCase{
    public function testing(){

        $testingInitial =  new UnitTest(1,2);

        $this->assertEquals('5',$testingInitial->TaskOne(1,2));
    }
}*/

require_once './userTask.php';

use PHPUNIT\Framework\TestCase;

class taskOneTest extends TestCase{
    public function testing(){
        $testingInitial = new UnitTest();
        $testingInitial->number1 = 1;
        $testingInitial->number2=2;

        $this->assertEquals('10',$testingInitial->TaskOne());
    }
}