<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Types\Common\AccountIdentifier;
	/**
	 * The sender identifier type contains information to identify
	 * a PayPal account.
	 */
	class SenderIdentifier extends AccountIdentifier {
		
		/**
		 *
		 * @access public
		 * @var bool
		 */
		public bool $useCredentials;
		
		/**
		 *
		 * @access public
		 * @var TaxIdDetails
		 */
		public TaxIdDetails $taxIdDetails;
		
	}
