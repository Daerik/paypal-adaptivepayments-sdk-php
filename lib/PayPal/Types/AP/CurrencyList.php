<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\CurrencyType;
	/**
	 * A list of ISO currencies.
	 */
	class CurrencyList
		extends PPMessage {
		
		/**
		 *
		 * @array
		 * @access public
		 * @var CurrencyType
		 */
		public mixed $currency;
		
		/**
		 * Constructor with arguments
		 */
		public function __construct($currency = NULL) {
			$this->currency = $currency;
		}
		
	}
