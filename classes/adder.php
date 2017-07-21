<?php

class adder implements operatorInterface
{
	protected $outcome;
		public function run($number1,$number2)
		{
			$this->outcome=$number1+$number2;
			return "$number1". ' + '."$number2".' = '.$this->outcome;
		
		}
}