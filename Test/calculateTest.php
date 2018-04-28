<?php
use PHPUnit\Framework\TestCase;
require_once('calculate.php');

class calculateTest extends TestCase
{
	protected $calc;

    protected function setUp()
    {
        $this->calc = new calculate(4,20,"hello");        
    }

    /*
    * @test 
    */
    public function testCalcAloneFail()
    {
        $this->calc->calc(new alone("HOLA", 10));  
        $this->expectOutputString("100");      
    }

    /*
    * @test 
    */
    public function testCalcAlone()
    {
        $this->calc->calc(new alone(10, 10));
        $this->expectOutputString("100");
    }

    /*
    * @test 
    */
    public function testCalcFamilyFail()
    {
        $this->calc->calc(new family("HOLA", 10, 0.3, 5));
        $this->expectOutputString("100");        
    }

    /*
    * @test 
    */
    public function testCalcFamily()
    {
        $this->calc->calc(new family(10, 10, 0.3, 5));
        $this->expectOutputString("350");        
    }

    /*
    * @test 
    */
     public function testOptDescFail(){
        $this->assertEquals($this->calc->getOptDesc(),"100");        
     }

     /*
    * @test 
    */
     public function testOptDesc(){
        $this->assertEquals($this->calc->getOptDesc(),"Family");        
     }

     /*
    * @test 
    */
     public function testOption(){
        $this->assertEquals($this->calc->getOption(),2);
        
     }

     /*
    * @test 
    */
     public function testOption2(){
        $this->assertEquals($this->calc->getOption(),4);
        
     }

     /*
    * @test 
    */
     public function testTotalDescFail(){
        $this->calc->getTotalDesc();
        $this->expectOutputString("4");
     }

     /*
    * @test 
    */
     public function testTotalDesc(){
        $this->calc->getTotalDesc();
        $this->expectOutputString("<br/><b>OPTION:</b>Family<br/><br/><b>AMOUNT:</b>20<br/><br/><b>TOTAL:</b>:");
     }

}
?>