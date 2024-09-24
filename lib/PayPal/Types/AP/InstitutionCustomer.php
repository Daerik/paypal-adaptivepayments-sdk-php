<?php 
namespace PayPal\Types\AP;
use Cassandra\Date;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\BaseAddress;
/**
 * The customer of the initiating institution 
 */
class InstitutionCustomer  
  extends PPMessage   {

	/**
	 * The unique identifier as assigned to the institution. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $institutionId;

	/**
	 * The first (given) name of the end consumer as known by the
	 * institution. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $firstName;

	/**
	 * The last (family) name of the end consumer as known by the
	 * institution. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $lastName;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $middleName;

	/**
	 * The full name of the end consumer as known by the
	 * institution. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $displayName;

	/**
	 * The unique identifier as assigned to the end consumer by the
	 * institution. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $institutionCustomerId;

	/**
	 * The two-character ISO country code of the home country of
	 * the end consumer 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $countryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $email;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var date	 
	 */ 
	public Date $dateOfBirth;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var BaseAddress
	 */ 
	public BaseAddress $address;

	/**
	 * Constructor with arguments
	 */
	public function __construct($institutionId = NULL, $firstName = NULL, $lastName = NULL, $displayName = NULL, $institutionCustomerId = NULL, $countryCode = NULL) {
		$this->institutionId = $institutionId;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->displayName = $displayName;
		$this->institutionCustomerId = $institutionCustomerId;
		$this->countryCode = $countryCode;
	}


}
