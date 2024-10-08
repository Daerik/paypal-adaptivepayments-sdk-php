<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\RequestEnvelope;
	/**
	 * A request to make a refund based on various criteria. A
	 * refund can be made against the entire payKey, an individual
	 * transaction belonging to a payKey, a tracking id, or a
	 * specific receiver of a payKey.
	 */
	class RefundRequest
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
		public string $currencyCode;
		
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
		 *
		 * @access public
		 * @var ReceiverList
		 */
		public ReceiverList $receiverList;
		
		/**
		 * Constructor with arguments
		 */
		public function __construct($requestEnvelope = NULL) {
			$this->requestEnvelope = $requestEnvelope;
		}
		
	}
