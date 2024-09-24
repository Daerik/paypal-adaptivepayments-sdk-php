<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	/**
	 *
	 */
	class PaymentInfoList
		extends PPMessage {
		
		/**
		 *
		 * @array
		 * @access public
		 * @var PaymentInfo
		 */
		public PaymentInfo $paymentInfo;
		
	}
