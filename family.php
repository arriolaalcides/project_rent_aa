<?php
	require_once('calculateInterface.php');
	
	class family implements calculateInterface{
		
		private $opt_price;
		private $amount;
		private $amount_fly;		
		private $discount_family;
		public $total;
		
		/*
			@param $opt: the option chosed by the user
			@param $amount: the amount provided by the user
			@param $amount_fly: the family amount provided by the user
			@param $family: the discount family provided by the project			
		*/
		public function __construct($opt_price, $amount, $discount_family, $amount_fly){
			$this->opt_price = $opt_price;
			$this->amount = $amount;
			$this->discount_family = $discount_family;
			$this->amount_fly = $amount_fly;
		}
		
		/*
			 @return int
		*/
		public function calc(){
			$subtotal = $this->amount * $this->amount_fly * $this->opt_price;
			$subtotal2 = $subtotal * $this->discount_family;
			$this->total = $subtotal - $subtotal2; 
			echo " {$this->total}";
		}
		
	}
?>
