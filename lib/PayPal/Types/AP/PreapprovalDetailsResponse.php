<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\ErrorData;
	use PayPal\Types\Common\ResponseEnvelope;
	
	/**
	 * The details of the Preapproval as specified in the
	 * Preapproval operation.
	 */
	class PreapprovalDetailsResponse extends PPMessage {
		public ResponseEnvelope $responseEnvelope;
		public bool             $approved;
		public string           $cancelUrl;
		public int              $curPayments;
		public float            $curPaymentsAmount;
		public int              $curPeriodAttempts;
		public string           $curPeriodEndingDate;
		public string           $currencyCode;
		public int              $dateOfMonth;
		public string           $dayOfWeek;
		public string           $endingDate;
		public float            $maxAmountPerPayment;
		public int              $maxNumberOfPayments;
		public int              $maxNumberOfPaymentsPerPeriod;
		public float            $maxTotalAmountOfAllPayments;
		public string           $paymentPeriod;
		public string           $pinType;
		public string           $returnUrl;
		public string           $senderEmail;
		public string           $memo;
		public string           $startingDate;
		public string           $status;
		public string           $ipnNotificationUrl;
		public AddressList      $addressList;
		public string           $feesPayer;
		public bool             $displayMaxTotalAmount;
		public SenderIdentifier $sender;
		public string           $agreementType;
		public ErrorData        $error;
	}
