<?php

class Generate{

	function NumberNick(){ 

		$dateTime = date("YmdHis"); 
		$letter = chr(rand(97, 122)); 
		return $dateTime . $letter;

	}

}

?>