<?php
require_once(realpath(dirname(__FILE__)) . '/../../for_Bookshop/_Data_Access_Layer/sale.php');

/**
 * @access public
 * @author Nora
 * @package for_Bookshop._Data_Access_Layer
 */
class book {
	private $_book_ID;
	private $_title;
	private $_price;
	/**
	 * @AssociationType for Bookshop. Data Access Layer.sale
	 */
	public $_unnamed_sale_;

	/**
	 * @access public
	 */
	public function getBook_ID() {
		return $this->_book_ID;
	}

	/**
	 * @access public
	 * @param aBook ID
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setBook_ID($aBook_ID) {
		$this->_book_ID = $aBook_ID;
	}

	/**
	 * @access public
	 */
	public function getTitle() {
		return $this->_title;
	}

	/**
	 * @access public
	 * @param aTitle
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setTitle($aTitle) {
		$this->_title = $aTitle;
	}

	/**
	 * @access public
	 */
	public function getPrice() {
		return $this->_price;
	}

	/**
	 * @access public
	 * @param aPrice
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setPrice($aPrice) {
		$this->_price = $aPrice;
	}
}
?>