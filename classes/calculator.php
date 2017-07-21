<?php

class calculator
{
	protected $result;
	protected $inputs;
	protected $operation;
	protected $number1;
	protected $number2;
	
	
	public function setOperation(Operatorinterface $operation)
	{
		$this->operation=$operation;
		
	}
	
	public function calculate()
	{
		
		$this->inputs=func_get_Args();
		$this->number1=$this->inputs[0];
		$this->number2=$this->inputs[1];
		$this->result=$this->operation->run($this->number1,$this->number2);
		
	}
	
	public function getResult()
	{
		return $this->result;
	}
}