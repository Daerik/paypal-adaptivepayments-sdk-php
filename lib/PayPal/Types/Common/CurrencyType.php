<?php
	namespace PayPal\Types\Common;
	
	use PayPal\Core\PPMessage;
	/**
	 *
	 */
	if(!class_exists('CurrencyType', FALSE)) {
		class CurrencyType
			extends PPMessage {
			
			/**
			 *
			 * @access public
			 * @var string
			 */
			public string $code;
			
			/**
			 *
			 * @access public
			 * @var double
			 */
			public mixed $amount;
			
			/**
			 * Constructor with arguments
			 */
			public function __construct($code = NULL, $amount = NULL) {
				$this->code   = $code;
				$this->amount = $amount;
			}
			
		}
	}
