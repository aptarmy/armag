<?php
	function trim_whitespace_in_comma_text($text) {
		/*
			Accept : string with comma, Return : Array separated by comma without whitespace
			this function accept text with comma and separate text by comma into Array
			which each of them have been trimmed already
		*/
		$arrText = explode(',', $text);
		for ($i=0; $i < count($arrText); $i++) { 
			$arrText[$i] = trim($arrText[$i]);
		}
		return $arrText;
	}