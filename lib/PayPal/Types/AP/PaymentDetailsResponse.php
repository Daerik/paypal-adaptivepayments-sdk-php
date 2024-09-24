<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\ErrorData;
	use PayPal\Types\Common\ResponseEnvelope;
	
	/**
	 * The details of the PayRequest as specified in the Pay
	 * operation.
	 */
	class PaymentDetailsResponse extends PPMessage {
		public ResponseEnvelope    $responseEnvelope;
		public ?string             $cancelUrl = NULL;
		public string              $currencyCode;
		public string              $ipnNotificationUrl;
		public string              $memo;
		public PaymentInfoList     $paymentInfoList;
		public ?string             $returnUrl = NULL;
		public string              $senderEmail;
		public ?string             $status    = NULL;
		public string              $trackingId;
		public string              $payKey;
		public string              $actionType;
		public string              $feesPayer;
		public bool                $reverseAllParallelPaymentsOnError;
		public string              $preapprovalKey;
		public FundingConstraint   $fundingConstraint;
		public SenderIdentifier    $sender;
		public ShippingAddressInfo $shippingAddress;
		public string              $payKeyExpirationDate;
		public ErrorData           $error;
	}
