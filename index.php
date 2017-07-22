<?php

require_once 'init.php';

$c= new calculator;

if(isset($_POST['fnumber']) && isset($_POST['snumber']) && isset($_POST['operation']))
{
	switch($_POST['operation'])
	{
		case "add":
		{
			$c->setOperation(New adder);
			$c->calculate($_POST['fnumber'],$_POST['snumber']);
			break;
		}
			
		case "Substract":
		{
			$c->setoperation(new Subtractor);
			$c->calculate($_POST['fnumber'],$_POST['snumber']);
			break;
		}

		case "multiply":
		{
			$c->setOperation(new multiplier);
			$c->calculate($_POST['fnumber'],$_POST['snumber']);
			break;
		}

		case "divide":
		{
			$c->setOperation(new divider);
			$c->calculate($_POST['fnumber'],$_POST['snumber']);
			break;
		}

	}
}

require_once('views/Calculator_view.php');




