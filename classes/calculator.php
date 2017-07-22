<?php

class calculator
{
	protected $result;
	
	protected $operation;
	
	
	public function setOperation(operatorinterface $operation)
	{
		$this->operation=$operation;
		
	}
	
	public function calculate($number1, $number2)
	{
		$this->result=$this->operation->run($number1,$number2);
		
	}
	
	public function getResult()
	{
		return $this->result;
	}
}