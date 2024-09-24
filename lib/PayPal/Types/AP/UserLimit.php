<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\CurrencyType;
	/**
	 *
	 */
	class UserLimit
		extends PPMessage {
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $limitType;
		
		/**
		 *
		 * @access public
		 * @var CurrencyType
		 */
		public CurrencyType $limitAmount;
		
	}
