<?php
/**
 * @access public
 * @author Nora
 * @package for_Bookshop.Presentation_Layer
 */
class LoginForm {
	private $_password;
	private $_user_name;
	private $_loginButton;

	/**
	 * @access public
	 */
	public function getPassword() {
		return $this->_password;
	}

	/**
	 * @access public
	 * @param aPassword
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
	public function getUser_name() {
		return $this->_user_name;
	}

	/**
	 * @access public
	 * @param aUser name
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setUser_name($aUser_name) {
		$this->_user_name = $aUser_name;
	}

	/**
	 * @access public
	 */
	public function getLoginButton() {
		return $this->_loginButton;
	}

	/**
	 * @access public
	 * @param aLoginButton
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setLoginButton($aLoginButton) {
		$this->_loginButton = $aLoginButton;
	}
}
?>