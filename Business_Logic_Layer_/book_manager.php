<?php
require_once(realpath(dirname(__FILE__)) . '/../../for_Bookshop/Business_Logic_Layer_/Login_controller.php');

/**
 * @access public
 * @author Nora
 * @package for_Bookshop.Business_Logic_Layer_
 */
class book_manager {
	private $_inventory;
	private $_book;
	/**
	 * @AssociationType for Bookshop.Business Logic Layer .Login controller
	 */
	public $_unnamed_Login_controller_;

	/**
	 * @access public
	 */
	public function getInventory() {
		return $this->_inventory;
	}

	/**
	 * @access public
	 * @param aInventory
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setInventory($aInventory) {
		$this->_inventory = $aInventory;
	}

	/**
	 * @access public
	 */
	public function getBook() {
		return $this->_book;
	}

	/**
	 * @access public
	 * @param aBook
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setBook($aBook) {
		$this->_book = $aBook;
	}
}
?>