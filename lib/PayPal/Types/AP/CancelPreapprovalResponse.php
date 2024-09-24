<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\ErrorData;
	use PayPal\Types\Common\ResponseEnvelope;
	/**
	 * The result of the CancelPreapprovalRequest.
	 */
	class CancelPreapprovalResponse
		extends PPMessage {
		
		/**
		 *
		 * @access public
		 * @var ResponseEnvelope
		 */
		public ResponseEnvelope $responseEnvelope;
		
		/**
		 *
		 * @array
		 * @access public
		 * @var ErrorData
		 */
		public ErrorData $error;
		
	}
