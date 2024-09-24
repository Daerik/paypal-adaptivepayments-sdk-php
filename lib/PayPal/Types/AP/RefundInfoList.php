<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	/**
	 *
	 */
	class RefundInfoList
		extends PPMessage {
		
		/**
		 *
		 * @array
		 * @access public
		 * @var RefundInfo
		 */
		public RefundInfo $refundInfo;
		
	}
