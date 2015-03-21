<?php
class siteadmin {
	public $email;
	public $mdp_siteadmin;
	
 	function __construct($email,$mdp_siteadmin) {
 		$this->email=$email;
	 	$this->mdp_siteadmin=$mdp_siteadmin;	
	 }
	 	
	public function verifyPassword($mdp_siteadmin) {
		if($mdp_siteadmin == $this->mdp_siteadmin) return true;
		else return false;
	}	
}
?>