<?php

// convert_to_int()

	function convert_to_int($int){
		return intval($int);
	}

	echo convert_to_int('666');
	//echo convert_to_int('dog');


// convert_to_float()
	
	function convert_to_float($float){
		
		if(floatval($float) != 0){
			return floatval($float); 
		} else {
			return 0.0;
		}
	}


	$float = convert_to_float('fuuuk');
	//$float = convert_to_float('3.14159PIETOWNANDZBOYS');
	
	var_dump($float);
	echo $float;


//convert_to_string()

	//function convert_to_string($num){
	//	return strval($num);
	//}

	//$num = convert_to_string(8008);

	//echo gettype($num);

	//echo $num;