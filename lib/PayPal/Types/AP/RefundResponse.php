<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\ErrorData;
	use PayPal\Types\Common\ResponseEnvelope;
	/**
	 * The result of a Refund request.
	 */
	class RefundResponse
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
		public string $currencyCode;
		
		/**
		 *
		 * @access public
		 * @var RefundInfoList
		 */
		public RefundInfoList $refundInfoList;
		
		/**
		 *
		 * @array
		 * @access public
		 * @var ErrorData
		 */
		public ErrorData $error;
		
	}
