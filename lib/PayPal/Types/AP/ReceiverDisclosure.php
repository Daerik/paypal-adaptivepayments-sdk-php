<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\AccountIdentifier;
	use PayPal\Types\Common\CurrencyType;
	/**
	 * ReceiverDisclosure contains the disclosure related to
	 * Receiver/Receivers.
	 */
	class ReceiverDisclosure
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
		 * @var CurrencyType
		 */
		public CurrencyType $amountReceivedFromSender;
		
		/**
		 * The two-character ISO country code of the home country of
		 * the Receiver
		 *
		 * @access public
		 * @var string
		 */
		public string $countryCode;
		
		/**
		 *
		 * @access public
		 * @var ConversionRate
		 */
		public ConversionRate $conversionRate;
		
		/**
		 *
		 * @access public
		 * @var FeeDisclosure
		 */
		public FeeDisclosure $feeDisclosure;
		
		/**
		 *
		 * @access public
		 * @var CurrencyType
		 */
		public CurrencyType $totalAmountReceived;
		
	}
