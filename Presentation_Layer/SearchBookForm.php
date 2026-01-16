<?php
/**
 * @access public
 * @author Nora
 * @package for_Bookshop.Presentation_Layer
 */
class SearchBookForm {
	private $_search;
	private $_result;

	/**
	 * @access public
	 */
	public function getSearch() {
		return $this->_search;
	}

	/**
	 * @access public
	 * @param aSearch
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setSearch($aSearch) {
		$this->_search = $aSearch;
	}

	/**
	 * @access public
	 */
	public function getResult() {
		return $this->_result;
	}

	/**
	 * @access public
	 * @param aResult
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setResult($aResult) {
		$this->_result = $aResult;
	}
}
?>