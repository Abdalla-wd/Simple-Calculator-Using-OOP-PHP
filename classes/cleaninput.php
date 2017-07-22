<?php

class cleaninput
{

	public function clean($input1,$input2)
	{	
	$input1=stripslashes($input1);
	$input2=stripslashes($input2);
	$input1=strip_tags($input1);
	$input2=strip_tags($input2);
	$input1=htmlentities($input1);
	$input2=htmlentities($input2);
	return array($input1,$input2);
	
}

}

