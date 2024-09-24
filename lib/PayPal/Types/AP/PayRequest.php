<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\ClientDetailsType;
	use PayPal\Types\Common\RequestEnvelope;
	
	/**
	 * The PayRequest contains the payment instructions to make
	 * from sender to receivers.
	 */
	class PayRequest extends PPMessage {
		public ?RequestEnvelope  $requestEnvelope;
		public ClientDetailsType $clientDetails;
		public ?string           $actionType;
		public ?string           $cancelUrl;
		public ?string           $currencyCode;
		public string            $feesPayer;
		public string            $ipnNotificationUrl;
		public string            $memo;
		public string            $pin;
		public string            $preapprovalKey;
		public ?ReceiverList     $receiverList;
		public bool              $reverseAllParallelPaymentsOnError;
		public string            $senderEmail;
		public ?string           $returnUrl;
		public string            $trackingId;
		public FundingConstraint $fundingConstraint;
		public SenderIdentifier  $sender;
		public string            $payKeyDuration;
		
		/**
		 * Constructor with arguments
		 */
		public function __construct($requestEnvelope = NULL, $actionType = NULL, $cancelUrl = NULL, $currencyCode = NULL, $receiverList = NULL, $returnUrl = NULL) {
			$this->requestEnvelope = $requestEnvelope;
			$this->actionType      = $actionType;
			$this->cancelUrl       = $cancelUrl;
			$this->currencyCode    = $currencyCode;
			$this->receiverList    = $receiverList;
			$this->returnUrl       = $returnUrl;
		}
		
	}
