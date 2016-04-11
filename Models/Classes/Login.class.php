<?php
class Login extends Connection
{
	private $_login = '';
	private $_password = '';
	
	public function getLogin()
	{
		return $this->_login;
	}
	
	public function checkLogin($login)
	{
		$this->_login = \Library\Admin\safeText($login);
	}
	
	public function checkPassword($password)
	{
		$this->_password = \Library\Admin\safeText($password);
	}
	
	public function checkInDB()
	{
		
	}
}