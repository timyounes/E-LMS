<?php
function generateCode($numchars=7)
{
	$randomized ="";
	$str = "012345678923456789ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	for($i=0; $i < $numchars; $i++)
	{
		$randomized .= $str{rand() % strlen($str)};
	}
	return $randomized;
}

$code = generateCode('7');

//echo $code;

?>