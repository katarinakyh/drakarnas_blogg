<?php
	require_once ('simpletest/autorun.php');
	require_once ('../classes/stack.php');
	//vår klass som vi vill testa
	
	class TestOfStack extends UnitTestCase {//skapar egen klass som ärver av testsviten
		//function setUp //Körs först
		//sen test.... -funtioner
		//tearDown //nollar allt
		function testCreateNewMyStack() {//vi skapar detta ska börja med ordet test
			$myStack = new Stack();
			$this -> assertTrue($myStack);
		}
		
		function testCreateFixedArray(){
			$myStack = new Stack();
			$this -> assertIsA($myStack->array, "SplFixedArray");
		}
	
		function testPushValueToArray(){
			$myStack = new Stack();
			$myStack -> pushNewValue(1);
			$this -> assertEqual($myStack->array[0],1);
		}
		
		function testPushManyValues(){
			$myStack = new Stack();
			for($i=0; $i < count($myStack -> array); $i++) {
				$myStack->pushNewValue($i);
				$this -> assertEqual($myStack->array[$i],$i);
			}
		}
		
		function testPopValue(){
			$myStack = new Stack();
			for($i=0; $i < count($myStack -> array); $i++) {
				$myStack->pushNewValue($i);
			}
			$value = $myStack -> getValue();
			$this -> assertNotNull($value);
		}
		
		function testPopManyValues() {
			$myStack = new Stack();
			for($i=0; $i < count($myStack -> array); $i++) {
				$myStack->pushNewValue($i);
			}
			
			for($i=0; $i < count($myStack -> array); $i++) {
				$value = $myStack -> getValue();
				$this -> assertEqual($myStack->array[$i],$i);
			}
		}
		
		function testReadWriteReadWrite () {
			$myStack = new Stack();
			$myStack -> pushNewValue("A");
			$myStack -> pushNewValue("B");
			$myStack -> pushNewValue("C");
			$myStack -> pushNewValue("D");
			$this -> assertEqual($myStack -> getValue(), "D");
			$this -> assertEqual($myStack -> getValue(), "C");
			$this -> assertEqual($myStack -> getValue(), "B");
			$this -> assertEqual($myStack -> getValue(), "A");
		}
	}
	
	
	
	
	
	
	
	
?>