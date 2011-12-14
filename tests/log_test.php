<?php
	require_once ('simpletest/autorun.php');
	require_once ('../classes/log.php');
	//vår klass som vi vill testa
	
	class TestOfLogging extends UnitTestCase {//skapar egen klass som ärver av testsviten
		//function setUp //Körs först
		//sen test.... -funtioner
		//tearDown //nollar allt
		function testLogCreatesNewFileOnFirstMessage() {//vi skapar detta ska börja med ordet test
			@unlink('/temp/test.log');
			//tar bort fil om den redan finns @betyder att man ska trycka ner
			$log = new Log('/temp/test.log');
			//skapa ny instans av Log-klassen, inputet är filnamnet vi vill att den ska göra
			$this -> assertFalse(file_exists('/temp/test.log'));
			//säkerställer att filen inte finns
			$log -> message('Should write this to a file');
			//vi vill skriva detta log -> klassen vi testad
			$this -> assertTrue(file_exists('/temp/test.log'));
			//funktioner som redan finns this -> testobjektet
		}
	
	}
?>