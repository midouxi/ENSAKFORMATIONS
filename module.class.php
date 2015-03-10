<?php

class module

{
	public $id_module;
	public $nom_module;
	public $id_semestre;
	public $id_formations;

 	function __construct($id_module,$nom_module,$id_semestre,$id_formations)
 	{
 		$this->id_module=$id_module;
	 	$this->nom_module=$nom_module;
	 	$this->id_semestre=$id_semestre;
	 	$this->id_formations=$id_formations;
	 }
}

?>