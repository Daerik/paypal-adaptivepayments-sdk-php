<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\CurrencyType;
	/**
	 * FeeDisclosure contains the information related to Fees and
	 * taxes.
	 */
	class FeeDisclosure
		extends PPMessage {
		
		/**
		 *
		 * @access public
		 * @var CurrencyType
		 */
		public CurrencyType $fee;
		
		/**
		 *
		 * @access public
		 * @var CurrencyType
		 */
		public CurrencyType $taxes;
		
	}
