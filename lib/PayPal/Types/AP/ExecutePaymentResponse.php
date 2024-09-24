<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\ErrorData;
	use PayPal\Types\Common\ResponseEnvelope;
	/**
	 * The result of a payment execution.
	 */
	class ExecutePaymentResponse
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
		 * @var string
		 */
		public string $paymentExecStatus;
		
		/**
		 *
		 * @access public
		 * @var PayErrorList
		 */
		public PayErrorList $payErrorList;
		
		/**
		 *
		 * @access public
		 * @var PostPaymentDisclosureList
		 */
		public PostPaymentDisclosureList $postPaymentDisclosureList;
		
		/**
		 *
		 * @array
		 * @access public
		 * @var ErrorData
		 */
		public ErrorData $error;
		
	}
