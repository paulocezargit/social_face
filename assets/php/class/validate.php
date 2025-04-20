<?php 

class Validate{
    
    
	function Name(input) {
		
		const name = input.trim();

		if (name.length < 2) return false;

		for (let i = 0; i < name.length; i++) {
			const char = name[i];
			if (!char.match(/\p{L}/u)) {
				return false;
			}
		}

		return true;

	}

    function Email(input) {

    	const email = input.trim();
    	const validEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
    	return validEmailRegex.test(email);

    }

    function String($input) {

    	$input = trim($input);
    	return is_string($input) && $input !== '' && !is_numeric($input);

    }

    function Number($input) {

    	$input = trim($input);
    	return preg_match('/^-?\d+(\.\d+)?$/', $input) === 1;

    }

    function NumberInt($input) {

    	$input = trim($input);
    	return preg_match('/^-?\d+$/', $input) === 1;

    }

    function NumberFloat($input) {

    	$input = trim($input);
    	return preg_match('/^-?\d*\.\d+$/', $input) === 1;

    }

    function Date($input) {

    	$input = trim($input);
    	$d = DateTime::createFromFormat('Y-m-d', $input);
    	return $d && $d->format('Y-m-d') === $input;

    }

    function DateTime($input) {

    	$input = trim($input);
    	$d = DateTime::createFromFormat('Y-m-d H:i:s', $input);
    	return $d && $d->format('Y-m-d H:i:s') === $input;

    }


}

?>