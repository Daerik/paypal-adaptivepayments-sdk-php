<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	/**
	 * RefundInfo represents the refund attempt made to a Receiver
	 * of a PayRequest.
	 */
	class RefundInfo
		extends PPMessage {
		
		/**
		 *
		 * @access public
		 * @var Receiver
		 */
		public Receiver $receiver;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $refundStatus;
		
		/**
		 *
		 * @access public
		 * @var double
		 */
		public float $refundNetAmount;
		
		/**
		 *
		 * @access public
		 * @var double
		 */
		public float $refundFeeAmount;
		
		/**
		 *
		 * @access public
		 * @var double
		 */
		public float $refundGrossAmount;
		
		/**
		 *
		 * @access public
		 * @var double
		 */
		public float $totalOfAllRefunds;
		
		/**
		 *
		 * @access public
		 * @var bool
		 */
		public bool $refundHasBecomeFull;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $encryptedRefundTransactionId;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $refundTransactionStatus;
		
		/**
		 *
		 * @access public
		 * @var ErrorList
		 */
		public ErrorList $errorList;
		
	}
