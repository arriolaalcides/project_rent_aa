<?php
	
	include('calculate.php');		
	
	$opt = OPT_DAY;
	$amount = AMOUNT;
	$discount_family = DISCOUNT_FAMILY;
	$amount_fly = AMOUNT_FLY;

	$calc = new calculate($opt,$amount,null);

	$calc->getTotalDesc();
	
	switch($calc->getOption()){
		case 4:
			$calc->calc(new family($calc->getPrice(),$amount,$discount_family,$amount_fly));
			break;
		default:		
			$calc->calc(new alone($calc->getPrice(),$amount));
			break;
	}
	
?>
