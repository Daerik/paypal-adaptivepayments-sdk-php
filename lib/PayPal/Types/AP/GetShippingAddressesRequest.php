<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\RequestEnvelope;
	
	/**
	 * The request to get the addresses available for a payment.
	 */
	class GetShippingAddressesRequest extends PPMessage {
		public ?RequestEnvelope $requestEnvelope;
		public ?string          $key;
		
		/**
		 * Constructor with arguments
		 */
		public function __construct($requestEnvelope = NULL, $key = NULL) {
			$this->requestEnvelope = $requestEnvelope;
			$this->key             = $key;
		}
		
	}
