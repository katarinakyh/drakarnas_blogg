<?php
//game.php contains tic-tac-toe

class Game {

	public $matrix = array( array(1, 2, 3), array(1, 2, 3), array(1, 2, 3));
	private $row = array();
	private $col = array();

	public function fillMatrix() {
		for ($i = 0; $i < count($this -> matrix); $i++) {
			for ($j = 0; $j < count($this -> matrix[$i]); $j++) {
				$this -> matrix[$i][$j] = 0;
			}
		}

	}

	public function fillMatrixWithValues() {
		for ($i = 0; $i < count($this -> matrix); $i++) {
			for ($j = 0; $j < count($this -> matrix[$i]); $j++) {
				$this -> matrix[$i][$j] = rand(1, 2);
			}
		}

	}

	public function makeMove($position_x, $position_y, $sign) {

		if ($this -> matrix[$position_x][$position_y] > 0) {
			//return FALSE;
		} else {
			$this -> matrix[$position_x][$position_y] = $sign;
		}

	}

	public function boardIsFull() {
		for ($i = 0; $i < count($this -> matrix); $i++) {
			for ($j = 0; $j < count($this -> matrix[$i]); $j++) {
				if ($this -> matrix[$i][$j] == 0) {
					return FALSE;
				}
			}
		}
		return TRUE;
	}

	public function rowIsFull($sign) {
		for ($i = 0; $i < count($this -> matrix); $i++) {
			$this -> row[$i] = $sign;

			for ($j = 0; $j < count($this -> matrix[$i]); $j++) {
				if ($this -> matrix[$i][$j] == 0) {
					$this -> col[$j] = $sign;
				}
			}

		}
		
		$i = 0;
		if($this -> row[$i] === $this -> row[$i+1] === $this -> row[$i+2]){
			echo "Du har tre i rad i rad!!!";
		}else if($this -> col[$i] === $this -> col[$i+1] === $this -> col[$i+2]){
			echo "Du har tre i rad i kolumn!!!";	
		}  
	}

}

$game = new Game();
$game -> fillMatrixWithValues();
print_r($game -> matrix);
?>