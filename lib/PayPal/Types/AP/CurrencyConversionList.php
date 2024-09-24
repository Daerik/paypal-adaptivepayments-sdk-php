<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\CurrencyType;
	/**
	 * A list of estimated currency conversions for a base
	 * currency.
	 */
	class CurrencyConversionList
		extends PPMessage {
		
		/**
		 *
		 * @access public
		 * @var CurrencyType
		 */
		public CurrencyType $baseAmount;
		
		/**
		 *
		 * @access public
		 * @var CurrencyList
		 */
		public CurrencyList $currencyList;
		
	}
