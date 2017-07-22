<?php

require_once 'init.php';

$c= new calculator;

if(isset($_POST['fnumber']) && isset($_POST['snumber']) && isset($_POST['operation']))
{
	//cleaning input from injection attempts
	
	$cleaningobj= new cleaninput;
	list($cleaned_fnumber,$cleaned_snumber)=$cleaningobj->clean($_POST['fnumber'],$_POST['snumber']);
	
	//executing the requested operation
	
	switch($_POST['operation'])
	{
		case "add":
		{
			$c->setOperation(New adder);
			$c->calculate($cleaned_fnumber,$cleaned_snumber);
			break;
		}
			
		case "Substract":
		{
			$c->setoperation(new Subtractor);
			$c->calculate($cleaned_fnumber,$cleaned_snumber);
			break;
		}

		case "multiply":
		{
			$c->setOperation(new multiplier);
			$c->calculate($cleaned_fnumber,$cleaned_snumber);
			break;
		}

		case "divide":
		{
			$c->setOperation(new divider);
			$c->calculate($cleaned_fnumber,$cleaned_snumber);
			break;
		}

	}
}

	
require_once('views/Calculator_view.php');




