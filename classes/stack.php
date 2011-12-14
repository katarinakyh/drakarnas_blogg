<?php
//stack.php skapar en ny stack

	class Stack {
		public $array;
		private $currentIndex = 0;
		
		public function __construct(){
			$this -> array = new SplFixedArray(5);
		}
		 
		public function pushNewValue($value){
			if($this -> currentIndex < count($this -> array)) {
				$this ->array[$this->currentIndex] = $value;
				$this -> currentIndex++;
			}else{
				echo "Array is full";
			}
		}
		
		public function getValue(){
			$this -> currentIndex--;
			return $this->array[$this->currentIndex];
		}	
	}
	
	$testStack = new Stack();
	$testStack -> pushNewValue("A");
	echo "getValue returns ". $testStack -> getValue();
	
		
?>