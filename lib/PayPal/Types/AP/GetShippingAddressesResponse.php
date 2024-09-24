<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\ErrorData;
	use PayPal\Types\Common\ResponseEnvelope;
	/**
	 * The response to get the shipping addresses available for a
	 * payment.
	 */
	class GetShippingAddressesResponse
		extends PPMessage {
		
		/**
		 *
		 * @access public
		 * @var ResponseEnvelope
		 */
		public ResponseEnvelope $responseEnvelope;
		
		/**
		 *
		 * @access public
		 * @var Address
		 */
		public Address $selectedAddress;
		
		/**
		 *
		 * @array
		 * @access public
		 * @var ErrorData
		 */
		public ErrorData $error;
		
	}
