<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	/**
	 *
	 */
	class ReceiverList extends PPMessage {
		/**
		 * @var null|Receiver[]
		 */
		public ?array $receiver;
		
		/**
		 * Constructor with arguments
		 */
		public function __construct($receiver = NULL) {
			$this->receiver = $receiver;
		}
		
	}
