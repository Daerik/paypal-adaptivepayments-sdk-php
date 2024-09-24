<?php
	namespace PayPal\Types\Common;
	
	use PayPal\Core\PPMessage;
	
	/**
	 * This specifies a list of parameters with every response from
	 * a service.
	 */
	class ResponseEnvelope extends PPMessage {
		public string $timestamp;
		public string $ack;
		public string $correlationId;
		public string $build;
	}
