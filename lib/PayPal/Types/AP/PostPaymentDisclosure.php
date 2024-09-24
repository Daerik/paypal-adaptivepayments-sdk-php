<?php
	namespace PayPal\Types\AP;
	
	use Cassandra\Date;
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\AccountIdentifier;
	/**
	 * Contains information related to Post Payment Disclosure
	 * Details This contains 1.Receivers information 2.Funds
	 * Avalibility Date
	 */
	class PostPaymentDisclosure
		extends PPMessage {
		
		/**
		 *
		 * @access public
		 * @var AccountIdentifier
		 */
		public AccountIdentifier $accountIdentifier;
		
		/**
		 *
		 * @access public
		 * @var date
		 */
		public Date $fundsAvailabilityDate;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $fundsAvailabilityDateDisclaimerText;
		
	}
