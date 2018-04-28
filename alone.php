<?php
	require_once('calculateInterface.php');
	
	class alone implements calculateInterface{
		
		private $opt;
		private $amount;
		private $hour;
		private $day;
		private $week;
		public $total;
		
		/*
			@param $opt: the option chosed by the user
			@param $amount: the amount provided by the user
			@param $hour: the price by hour provided by the project
			@param $day: the price by day provided by the project
			@param $week: the price by week provided by the project
		*/
		public function __construct($amount, $price){
			
			$this->amount = $amount;
			$this->price = $price;
		}
		
		/*
			 @return int
		*/
		public function calc(){ 
			$this->total = $this->amount * $this->price;
			echo " {$this->total}";
			return $this->total;
		}

	}
?>
