<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\ErrorData;
	use PayPal\Types\Common\ResponseEnvelope;
	
	/**
	 * The response message for the SetPaymentOption request
	 */
	class SetPaymentOptionsResponse extends PPMessage {
		public ?ResponseEnvelope $responseEnvelope = NULL;
		public ErrorData         $error;
	}
