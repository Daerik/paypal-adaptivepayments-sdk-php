<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\RequestEnvelope;
	/**
	 * The request to confirm a Preapproval.
	 */
	class ConfirmPreapprovalRequest
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
		public mixed $preapprovalKey;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $fundingSourceId;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $pin;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $agreementType;
		
		/**
		 * Constructor with arguments
		 */
		public function __construct($requestEnvelope = NULL, $preapprovalKey = NULL) {
			$this->requestEnvelope = $requestEnvelope;
			$this->preapprovalKey  = $preapprovalKey;
		}
		
	}
