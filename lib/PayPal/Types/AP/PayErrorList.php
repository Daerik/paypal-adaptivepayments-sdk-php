<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	/**
	 *
	 */
	class PayErrorList
		extends PPMessage {
		
		/**
		 *
		 * @array
		 * @access public
		 * @var PayError
		 */
		public PayError $payError;
		
	}
