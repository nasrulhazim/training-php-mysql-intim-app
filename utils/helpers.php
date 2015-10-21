<?php 

	// require
	// when the file is required by your application, e.g. an important message template or a file containing configuration variables without which the app would break.

	// require_once
	// when the file contains content that would produce an error on subsequent inclusion, e.g. function important() { /* important code */} is definitely needed in your application but since functions cannot be redeclared should not be included again.

	// include when the file is not required and application flow should continue when not found, e.g.
	// great for templates referencing variables from the current scope or something

	// include_once
	// optional dependencies that would produce errors on subsequent loading or maybe remote file inclusion that you do not want to happen twice due to the HTTP overhead


// display paragraph
function p($value) {
	e($value, 'p');
}

// display heading
function h($value, $number = 1) {
	if($number < 0 || $number > 6) {
		$number = 1;
	}
	e($value, 'h'.$number, array('class' => 'heading-'.$number));
}

// display element
function e($string, $element, $attributes = array(), $return = false) {

	$attribute_string = '';

	// if attributes not empty
	if(!empty($attributes)) {
		foreach ($attributes as $key => $value) {
			$attribute_string .= $key . '="' . $value . '" ';
		}
	}

	$return_value = '<'.$element.' '.$attribute_string.'>'.$string.'</'.$element.'>';

	if($return == true) {
		return $return_value;
	} else {
		echo $return_value;
	}
}