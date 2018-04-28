<?php
		
	include('alone.php');	
	include('family.php');
	include('data.php');
	require_once('calculateInterface.php');

	class calculate{
		
		private $opt; 
		private $amount; 
		private $hour;
		private $day;
		private $week;
		private $discount_family;
		private $amount_fly;
		private $price;

		private $array ;
		
		/*
			@param $opt: the option chosed by the user
			@param $amount: the amount provided by the user
			@param $hour: the option hour provided by the user
			@param $day: the option day provided by the user
			@param $week: the option week provided by the user
		*/
		public function __construct($opt, $amount, $price = NULL){
			$this->opt = $opt;
			$this->amount = $amount;
			$this->price = $price;			
		}
		
		/*
			@return opt (int)
		*/
		public function getOption(){
			return $this->opt ;
		}
		
		/*
			@return amount (int)
		*/
		public function getAmount(){
			return $this->amount ;
		}
				
		/*
			Show message with params
			@return message (string)
		*/
		public function getTotalDesc(){
			echo "<br/><b>OPTION:</b>".$this->getOptDesc()."<br/>";
			echo "<br/><b>AMOUNT:</b>".$this->getAmount()."<br/>";
			echo "<br/><b>TOTAL:</b>:";
		}

		/*
			@return getOptDesc (string)
		*/
		public function getOptDesc(){
			$opt_desc = '';
			switch($this->opt){
				case 1:
						$opt_desc = 'By hour';
					break;
				case 2:
						$opt_desc = 'By day';						
					break;
				case 3:
						$opt_desc = 'By week';
						
					break;
				case 4:
						$opt_desc = 'Family';
					break;
				default:
						$opt_desc = 'Unknown';
					break;
			}
			return $opt_desc;
		}

		public function getPrice(){
			switch ($this->opt) {
				case 1:
						$this->price = BY_HOUR;
					break;
				case 2:
						$this->price = BY_DAY;
					break;
				case 3:
						$this->price = BY_WEEK;
					break;
			}
			return $this->price;
		}
		
		/*
			@return calc (function)
		*/
		public function calc(calculateInterface $calculate)
	    {
	        $calculate->calc();
	    }
		
	}
?>
