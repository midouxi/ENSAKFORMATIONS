<?php

class semestre {
	public $id_semestre;
	public $nbr_module;
	public $id_formations;

 	function __construct($id_semestre,$nbr_module,$id_formations) {
 		$this->id_semestre=$id_semestre;
	 	$this->nbr_module=$nbr_module;
	 	$this->id_formations=$id_formations;
	}
}
?>