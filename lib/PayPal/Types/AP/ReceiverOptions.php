<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	/**
	 * Options that apply to the receiver of a payment, allows
	 * setting additional details for payment using invoice.
	 */
	class ReceiverOptions
		extends PPMessage {
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $description;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $customId;
		
		/**
		 *
		 * @access public
		 * @var InvoiceData
		 */
		public InvoiceData $invoiceData;
		
		/**
		 *
		 * @access public
		 * @var ReceiverIdentifier
		 */
		public mixed $receiver;
		
		/**
		 *
		 * @access public
		 * @var string
		 */
		public string $referrerCode;
		
		/**
		 * Constructor with arguments
		 */
		public function __construct($receiver = NULL) {
			$this->receiver = $receiver;
		}
		
	}
