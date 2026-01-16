<?php
require_once(dirname(__FILE__) . '/Login_controller.php');

/**
 * @access public
 * @author Nora
 * @package for_Bookshop.Business_Logic_Layer_
 */
class book_manager
{
	private $_inventory;
	private $_book;
	/**
	 * @AssociationType for Bookshop.Business Logic Layer .Login controller
	 */
	public $_unnamed_Login_controller_;

	/**
	 * @access public
	 */
	public function getInventory()
	{
		return $this->_inventory;
	}

	/**
	 * @access public
	 * @param mixed $aInventory
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setInventory($aInventory)
	{
		$this->_inventory = $aInventory;
	}

	/**
	 * @access public
	 */
	public function getBook()
	{
		return $this->_book;
	}

	/**
	 * @access public
	 * @param book $aBook
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setBook($aBook)
	{
		$this->_book = $aBook;
	}

	/**
	 * @access public
	 * @param string $title
	 * @return book|null
	 */
	public function searchBook($title)
	{
		// Mock search logic
		if ($this->_book && $this->_book->getTitle() === $title) {
			return $this->_book;
		}
		return null;
	}

	/**
	 * @access public
	 * @param string $title
	 * @param float $price
	 * @return book
	 */
	public function addBook($title, $price)
	{
		require_once(dirname(__FILE__) . '/../_Data_Access_Layer/book.php');
		$newBook = new book();
		$newBook->setTitle($title);
		$newBook->setPrice($price);
		$this->setBook($newBook);
		return $newBook;
	}
}
?>