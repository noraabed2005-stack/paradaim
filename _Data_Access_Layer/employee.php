<?php
require_once(realpath(dirname(__FILE__)) . '/../../for_Bookshop/_Data_Access_Layer/sale.php');
require_once(realpath(dirname(__FILE__)) . '/../../for_Bookshop/_Data_Access_Layer/user.php');

/**
 * @access public
 * @author Nora
 * @package for_Bookshop._Data_Access_Layer
 */
class employee {
	private $_employee_ID;
	private $_user_ID;
	/**
	 * @AssociationType for Bookshop. Data Access Layer.sale
	 */
	public $_unnamed_sale_;
	/**
	 * @AssociationType for Bookshop. Data Access Layer.user
	 */
	public $_unnamed_user_;
	/**
	 * @AssociationType for Bookshop. Data Access Layer.sale
	 */
	public $_unnamed_sale_2;

	/**
	 * @access public
	 */
	public function getEmployee_ID() {
		return $this->_employee_ID;
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
	 */
	public function getUser_ID() {
		return $this->_user_ID;
	}

	/**
	 * @access public
	 * @param aUser ID
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setUser_ID($aUser_ID) {
		$this->_user_ID = $aUser_ID;
	}
}
?>