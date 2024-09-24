<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	/**
	 * PaymentInfo represents the payment attempt made to a
	 * Receiver of a PayRequest. If the execution of the payment
	 * has not yet completed, there will not be any transaction
	 * details.
	 */
	class PaymentInfo
		extends PPMessage {
		
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
		public string $transactionStatus;
		
		/**
		 *
		 * @access public
		 * @var Receiver
		 */
		public Receiver $receiver;
		
		/**
		 *
		 * @access public
		 * @var double
		 */
		public float $refundedAmount;
		
		/**
		 *
		 * @access public
		 * @var bool
		 */
		public bool $pendingRefund;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $senderTransactionId;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $senderTransactionStatus;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $pendingReason;
		
	}
