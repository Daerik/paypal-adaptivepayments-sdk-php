<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\RequestEnvelope;
	
	/**
	 * The request to set the options of a payment request.
	 */
	class SetPaymentOptionsRequest extends PPMessage {
		public ?RequestEnvelope $requestEnvelope;
		public ?string          $payKey;
		public InitiatingEntity $initiatingEntity;
		public DisplayOptions   $displayOptions;
		public string           $shippingAddressId;
		public SenderOptions    $senderOptions;
		
		/**
		 * @var ReceiverOptions[]
		 */
		public array $receiverOptions;
		
		/**
		 * Constructor with arguments
		 */
		public function __construct($requestEnvelope = NULL, $payKey = NULL) {
			$this->requestEnvelope = $requestEnvelope;
			$this->payKey          = $payKey;
		}
		
	}
