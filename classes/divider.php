<?php 

class divider implements operatorinterface
{
	public function run($number1,$number2)
	{
		if($number2==0)
			return "Can't divide numbers by zero. Please enter other numbers and try again.";
		return "$number1". ' / '."$number2".' = '.$number1/$number2;
	}
}