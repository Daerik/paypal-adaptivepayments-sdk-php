<?php
	namespace PayPal\Types\Common;
	
	use PayPal\Core\PPMessage;
	/**
	 *
	 */
	if(!class_exists('PhoneNumberType', FALSE)) {
		class PhoneNumberType
			extends PPMessage {
			
			/**
			 *
			 * @access public
			 * @var string
			 */
			public mixed $countryCode;
			
			/**
			 *
			 * @access public
			 * @var string
			 */
			public mixed $phoneNumber;
			
			/**
			 *
			 * @access public
			 * @var string
			 */
			public string $extension;
			
			/**
			 * Constructor with arguments
			 */
			public function __construct($countryCode = NULL, $phoneNumber = NULL) {
				$this->countryCode = $countryCode;
				$this->phoneNumber = $phoneNumber;
			}
			
		}
	}
