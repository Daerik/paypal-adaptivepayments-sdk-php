<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\AccountIdentifier;
	
	/**
	 * Contains information related to Post Payment Disclosure
	 * Details This contains 1.Receivers information 2.Funds
	 * Avalibility Date
	 */
	class PostPaymentDisclosure extends PPMessage {
		public AccountIdentifier $accountIdentifier;
		public string            $fundsAvailabilityDate;
		public string            $fundsAvailabilityDateDisclaimerText;
		
	}
