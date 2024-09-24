<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\ErrorData;
	use PayPal\Types\Common\ResponseEnvelope;
	
	/**
	 * The PayResponse contains the result of the Pay operation.
	 * The payKey and execution status of the request should always
	 * be provided.
	 */
	class PayResponse extends PPMessage {
		public ?ResponseEnvelope $responseEnvelope = NULL;
		public string            $payKey;
		public string            $paymentExecStatus;
		public PayErrorList      $payErrorList;
		public PaymentInfoList   $paymentInfoList;
		public SenderIdentifier  $sender;
		public FundingPlan       $defaultFundingPlan;
		public WarningDataList   $warningDataList;
		public ErrorData         $error;
	}
