<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\RequestEnvelope;
	/**
	 * The request to execute the payment request.
	 */
	class ExecutePaymentRequest
		extends PPMessage {
		
		/**
		 *
		 * @access public
		 * @var RequestEnvelope
		 */
		public RequestEnvelope $requestEnvelope;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public mixed $payKey;
		
		/**
		 * Describes the action that is performed by this API
		 *
		 * @access public
		 * @var string
		 */
		public string $actionType;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $fundingPlanId;
		
		/**
		 * Constructor with arguments
		 */
		public function __construct($requestEnvelope = NULL, $payKey = NULL) {
			$this->requestEnvelope = $requestEnvelope;
			$this->payKey          = $payKey;
		}
		
	}
