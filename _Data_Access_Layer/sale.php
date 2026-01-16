<?php
require_once(realpath(dirname(__FILE__)) . '/../../for_Bookshop/_Data_Access_Layer/employee.php');
require_once(realpath(dirname(__FILE__)) . '/../../for_Bookshop/_Data_Access_Layer/user.php');
require_once(realpath(dirname(__FILE__)) . '/../../for_Bookshop/_Data_Access_Layer/book.php');

/**
 * @access public
 * @author Nora
 * @package for_Bookshop._Data_Access_Layer
 */
class sale {
	private $_sale_ID;
	private $_employee_ID;
	private $_total;
	/**
	 * @AssociationType for Bookshop. Data Access Layer.employee
	 */
	public $_unnamed_employee_;
	/**
	 * @AssociationType for Bookshop. Data Access Layer.employee
	 */
	public $_unnamed_employee_2;
	/**
	 * @AssociationType for Bookshop. Data Access Layer.user
	 */
	public $_unnamed_user_;
	/**
	 * @AssociationType for Bookshop. Data Access Layer.book
	 */
	public $_unnamed_book_;

	/**
	 * @access public
	 */
	public function getSale_ID() {
		return $this->_sale_ID;
	}

	/**
	 * @access public
	 * @param aSale ID
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setSale_ID($aSale_ID) {
		$this->_sale_ID = $aSale_ID;
	}

	/**
	 * @access public
	 */
	public function getEmployee_ID() {
		return $this->_employee_ID;
	}

	/**
	 * @access public
	 */
	public function getAttribute() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param aEmployee ID
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setEmployee_ID($aEmployee_ID) {
		$this->_employee_ID = $aEmployee_ID;
	}

	/**
	 * @access public
	 * @param aAttribute
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setAttribute($aAttribute) {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function getTotal() {
		return $this->_total;
	}

	/**
	 * @access public
	 * @param aTotal
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setTotal($aTotal) {
		$this->_total = $aTotal;
	}
}
?>