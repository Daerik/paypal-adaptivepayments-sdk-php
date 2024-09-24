<?php
	namespace PayPal\Types\Common;
	
	use PayPal\Core\PPMessage;
	/**
	 *
	 */
	if(!class_exists('AccountIdentifier', FALSE)) {
		class AccountIdentifier
			extends PPMessage {
			
			/**
			 *
			 * @access public
			 * @var string
			 */
			public string $email;
			
			public PhoneNumberType $phone;
			
			/**
			 *
			 * @access public
			 * @var string
			 */
			public string $accountId;
			
		}
	}
