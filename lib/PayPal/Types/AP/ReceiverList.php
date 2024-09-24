<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	/**
	 *
	 */
	class ReceiverList extends PPMessage {
		public ?Receiver $receiver;
		
		/**
		 * Constructor with arguments
		 */
		public function __construct($receiver = NULL) {
			$this->receiver = $receiver;
		}
		
	}
