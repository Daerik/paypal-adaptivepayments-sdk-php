<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	/**
	 * This type contains the detailed warning information
	 * resulting from the service operation.
	 */
	class WarningData
		extends PPMessage {
		
		/**
		 *
		 * @access public
		 * @var int
		 */
		public int $warningId;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $message;
		
	}
