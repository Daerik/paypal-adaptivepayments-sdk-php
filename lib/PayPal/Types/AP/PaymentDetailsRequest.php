<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\RequestEnvelope;
	/**
	 * The request to look up the details of a PayRequest. The
	 * PaymentDetailsRequest can be made with either a payKey,
	 * trackingId, or a transactionId of the PayRequest.
	 */
	class PaymentDetailsRequest
		extends PPMessage {
		
		/**
		 *
		 * @access public
		 * @var RequestEnvelope
		 */
		public mixed $requestEnvelope;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $payKey;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $transactionId;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $trackingId;
		
		/**
		 * Constructor with arguments
		 */
		public function __construct($requestEnvelope = NULL) {
			$this->requestEnvelope = $requestEnvelope;
		}
		
	}
