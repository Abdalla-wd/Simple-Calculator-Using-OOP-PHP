<?php

class multiplier implements operatorinterface
{
	public function run($number1,$number2)
	{
		return "$number1". ' * '."$number2".' = '.$number1*$number2;
	}
}