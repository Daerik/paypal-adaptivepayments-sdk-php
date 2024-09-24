<?php
	namespace PayPal\Types\AP;
	
	use DateTime;
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\ErrorData;
	use PayPal\Types\Common\ResponseEnvelope;
	/**
	 * The details of the PayRequest as specified in the Pay
	 * operation.
	 */
	class PaymentDetailsResponse
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
		public string $cancelUrl;
		
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
		public string $ipnNotificationUrl;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $memo;
		
		/**
		 *
		 * @access public
		 * @var PaymentInfoList
		 */
		public PaymentInfoList $paymentInfoList;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $returnUrl;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $senderEmail;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $status;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $trackingId;
		
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
		public string $actionType;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $feesPayer;
		
		/**
		 *
		 * @access public
		 * @var bool
		 */
		public bool $reverseAllParallelPaymentsOnError;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $preapprovalKey;
		
		/**
		 *
		 * @access public
		 * @var FundingConstraint
		 */
		public FundingConstraint $fundingConstraint;
		
		/**
		 *
		 * @access public
		 * @var SenderIdentifier
		 */
		public SenderIdentifier $sender;
		
		/**
		 *
		 * @access public
		 * @var ShippingAddressInfo
		 */
		public ShippingAddressInfo $shippingAddress;
		
		/**
		 *
		 * @access public
		 * @var dateTime
		 */
		public DateTime $payKeyExpirationDate;
		
		/**
		 *
		 * @array
		 * @access public
		 * @var ErrorData
		 */
		public ErrorData $error;
		
	}
