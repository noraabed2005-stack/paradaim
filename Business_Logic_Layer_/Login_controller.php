<?php
require_once(realpath(dirname(__FILE__)) . '/../../for_Bookshop/Business_Logic_Layer_/book_manager.php');

/**
 * @access public
 * @author Nora
 * @package for_Bookshop.Business_Logic_Layer_
 */
class Login_controller {
	private $_user;
	/**
	 * @AssociationType for Bookshop.Business Logic Layer .book manager
	 */
	public $_unnamed_book_manager_;

	/**
	 * @access public
	 */
	public function getUser() {
		return $this->_user;
	}

	/**
	 * @access public
	 * @param aUser
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setUser($aUser) {
		$this->_user = $aUser;
	}
}
?>