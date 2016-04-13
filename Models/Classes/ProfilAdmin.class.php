<?php
class ProfilAdmin extends Connection
{
	private $_firstname = '';
	private $_lastname = '';
	
	public function __construct($profilId)
	{
		$result = Connection::connect()->prepare(
			"SELECT * FROM `be_users` WHERE id=:id LIMIT 1;"
		);
		$result->execute(array(':id' => $profilId));
		$login = $result->fetch();
		
		$this->_firstname = $login['firstname'];
		$this->_lastname = $login['lastname'];
	}
	
	public function getName()
	{
		if ($this->_firstname == '' && $this->_lastname == '') {
			return 'Profil';
		}
		return "{$this->_firstname} {$this->_lastname}";
	}
}