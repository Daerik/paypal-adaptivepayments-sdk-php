<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\BaseAddress;
	
	/**
	 * The customer of the initiating institution
	 */
	class InstitutionCustomer extends PPMessage {
		public string      $institutionId;
		public string      $firstName;
		public string      $lastName;
		public string      $middleName;
		public string      $displayName;
		public string      $institutionCustomerId;
		public string      $countryCode;
		public string      $email;
		public string      $dateOfBirth;
		public BaseAddress $address;
		
		/**
		 * Constructor with arguments
		 */
		public function __construct($institutionId = NULL, $firstName = NULL, $lastName = NULL, $displayName = NULL, $institutionCustomerId = NULL, $countryCode = NULL) {
			$this->institutionId         = $institutionId;
			$this->firstName             = $firstName;
			$this->lastName              = $lastName;
			$this->displayName           = $displayName;
			$this->institutionCustomerId = $institutionCustomerId;
			$this->countryCode           = $countryCode;
		}
		
	}
