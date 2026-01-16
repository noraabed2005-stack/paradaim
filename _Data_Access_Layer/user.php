<?php
require_once(dirname(__FILE__) . '/sale.php');
require_once(dirname(__FILE__) . '/employee.php');

/**
 * @access public
 * @author Nora
 * @package for_Bookshop._Data_Access_Layer
 */
class user {
	private $_username;
	private $_password;
	private $_email;
	/**
	 * @AssociationType for Bookshop. Data Access Layer.sale
	 */
	public $_unnamed_sale_;
	/**
	 * @AssociationType for Bookshop. Data Access Layer.employee
	 */
	public $_unnamed_employee_;

	/**
	 * @access public
	 */
	public function getUsername() {
		return $this->_username;
	}

	/**
	 * @access public
	 * @param string $aUsername
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setUsername($aUsername) {
		$this->_username = $aUsername;
	}

	/**
	 * @access public
	 */
	public function getPassword() {
		return $this->_password;
	}

	/**
	 * @access public
	 * @param string $aPassword
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setPassword($aPassword) {
		$this->_password = $aPassword;
	}

	/**
	 * @access public
	 */
	public function getEmail() {
		return $this->_email;
	}

	/**
	 * @access public
	 * @param string $aEmail
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setEmail($aEmail) {
		$this->_email = $aEmail;
	}
}
?>