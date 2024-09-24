<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\ClientDetailsType;
	use PayPal\Types\Common\RequestEnvelope;
	/**
	 * A request to create a Preapproval. A Preapproval is an
	 * agreement between a Paypal account holder (the sender) and
	 * the API caller (the service invoker) to make payment(s) on
	 * the the sender's behalf with various limitations defined.
	 */
	class PreapprovalRequest extends PPMessage {
		public ?RequestEnvelope  $requestEnvelope;
		public ClientDetailsType $clientDetails;
		public ?string           $cancelUrl;
		public ?string           $currencyCode;
		public int               $dateOfMonth;
		public string            $dayOfWeek;
		public string            $endingDate;
		public float             $maxAmountPerPayment;
		public int               $maxNumberOfPayments;
		public int               $maxNumberOfPaymentsPerPeriod;
		public float             $maxTotalAmountOfAllPayments;
		public string            $paymentPeriod;
		public ?string           $returnUrl;
		public string            $memo;
		public string            $ipnNotificationUrl;
		public string            $senderEmail;
		public ?string           $startingDate;
		public string            $pinType;
		public string            $feesPayer;
		public bool              $displayMaxTotalAmount;
		public bool              $requireInstantFundingSource;
		public SenderIdentifier  $sender;
		
		/**
		 * Constructor with arguments
		 */
		public function __construct($requestEnvelope = NULL, $cancelUrl = NULL, $currencyCode = NULL, $returnUrl = NULL, $startingDate = NULL) {
			$this->requestEnvelope = $requestEnvelope;
			$this->cancelUrl       = $cancelUrl;
			$this->currencyCode    = $currencyCode;
			$this->returnUrl       = $returnUrl;
			$this->startingDate    = $startingDate;
		}
		
	}
