<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\CurrencyType;
	/**
	 * Describes the conversion between 2 currencies.
	 */
	class CurrencyConversion
		extends PPMessage {
		
		/**
		 *
		 * @access public
		 * @var CurrencyType
		 */
		public CurrencyType $from;
		
		/**
		 *
		 * @access public
		 * @var CurrencyType
		 */
		public CurrencyType $to;
		
		/**
		 *
		 * @access public
		 * @var double
		 */
		public float $exchangeRate;
		
	}
