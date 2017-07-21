<?php

class subtractor implements OperatorInterface
{
	public function run($number1,$number2)
	{
		return "$number1". ' - '."$number2".' = '.$number1-$number2;
	}
}