<?php

class admin

{
	public $email;
	public $mdp_admin;
	

 	function __construct($email,$mdp_admin)
 	{
 		$this->email=$email;
	 	$this->mdp_admin=$mdp_admin;
		
	 }
	 	
	public function verifyPassword($mdp_admin){
		if($mdp_admin == $this->mdp_admin) return true;
		else return false;
	}

 	
	}




?>