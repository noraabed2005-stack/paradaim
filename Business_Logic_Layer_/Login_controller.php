<?php
require_once(dirname(__FILE__) . '/book_manager.php');

/**
 * @access public
 * @author Nora
 * @package for_Bookshop.Business_Logic_Layer_
 */
class Login_controller
{
	private $_user;
	/**
	 * @AssociationType for Bookshop.Business Logic Layer .book manager
	 */
	public $_unnamed_book_manager_;

	/**
	 * @access public
	 */
	public function getUser()
	{
		return $this->_user;
	}

	/**
	 * @access public
	 * @param user $aUser
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setUser($aUser)
	{
		$this->_user = $aUser;
	}

	/**
	 * @access public
	 * @param string $username
	 * @param string $password
	 * @return bool
	 */
	public function authenticate($username, $password)
	{
		// In a real app, this would check a database.
		// For now, we simulate a successful login if username is 'admin' and password is '123'
		if ($username === 'admin' && $password === '123') {
			require_once(dirname(__FILE__) . '/../_Data_Access_Layer/user.php');
			$user = new user();
			$user->setUsername($username);
			$user->setPassword($password);
			$this->setUser($user);
			return true;
		}
		return false;
	}
}
?>