<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\ErrorData;
	use PayPal\Types\Common\ResponseEnvelope;
	
	/**
	 * The response to get the shipping addresses available for a
	 * payment.
	 */
	class GetShippingAddressesResponse extends PPMessage {
		public ?ResponseEnvelope $responseEnvelope = NULL;
		public ?Address          $selectedAddress  = NULL;
		public ErrorData         $error;
	}
