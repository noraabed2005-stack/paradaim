<?php
/**
 * @access public
 * @author Nora
 * @package for_Bookshop.Presentation_Layer
 */
class AddBookForm
{
	private $_title;
	private $_button;

	/**
	 * @access public
	 */
	public function getTitle()
	{
		return $this->_title;
	}

	/**
	 * @access public
	 * @param string $aTitle
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setTitle($aTitle)
	{
		$this->_title = $aTitle;
	}

	/**
	 * @access public
	 */
	public function getButton()
	{
		return $this->_button;
	}

	/**
	 * @access public
	 * @param mixed $aButton
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setButton($aButton)
	{
		$this->_button = $aButton;
	}

	/**
	 * @access public
	 * @param book_manager $manager
	 * @param float $price
	 * @return book
	 */
	public function handleRequest($manager, $price)
	{
		return $manager->addBook($this->_title, $price);
	}
}
?>