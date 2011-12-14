<?php
	require_once ('simpletest/autorun.php');
	require_once ('../classes/game.php');
	//vår klass som vi vill testa
	
	class TestOfTictactoe extends UnitTestCase {//skapar egen klass som ärver av testsviten
		//function setUp //Körs först
		//sen test.... -funtioner
		//tearDown //nollar allt
		
		
		
		function testGame(){
			$game = new Game();
			$this -> assertNotNull($game);
		}
		
		function testGameContainsMatrix(){
			$game = new Game();
			$this->assertIsA($game -> matrix[0], "array");
		}

		function testGameMatrixHas3Rows(){
			$game = new Game();
			$this->assertTrue(count($game -> matrix) == 3);
		}

		function testGameMatrixHas3Columns(){
			$game = new Game();


			$this->assertTrue(count($game -> matrix[0]) == 3);
			$this->assertTrue(count($game -> matrix[1]) == 3);
			$this->assertTrue(count($game -> matrix[2]) == 3);
		}
		
		function testCheckIfCellIsEmpty(){
			$game = new Game();
			$game-> fillMatrix();
			for($i=0;$i < count($game->matrix); $i++){
				for($j=0;$j < count($game->matrix[$i]); $j++){
				$this->assertTrue($game -> matrix[$i][$j] == 0);
				}	
			}
		}

		function testMakeMove() {
			$game = new Game();
			$game-> fillMatrix();
			$sign = 2;
			$x = 1;
			$y = 2;
			$game-> makeMove($x, $y , $sign);
			$this->assertEqual($game -> matrix[$x][$y], $sign);
		}
		
		function testCheckIfCellIsFilled(){
			$game = new Game();
			$game-> fillMatrixWithValues();
			$sign = 2;
			$x = 1;
			$y = 2;
			$game-> makeMove($x, $y , $sign);
			$this->assertFalse($game -> matrix[$x][$y] == 0);
		}
		
		function testStopMove() {
			$game = new Game();
			$game-> fillMatrixWithValues();
			$sign = 2;
			$x = 1;
			$y = 2;
			//$game-> makeMove($x, $y , $sign);			
			$this->assertFalse($game -> makeMove($x, $y , $sign));
		}
		
	}
?>