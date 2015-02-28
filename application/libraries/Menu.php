<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Menu{
	
	private $arrMenu;

	public function __construct($params){
		$this->arrMenu = $params;
	}
	
	public function construirMenu(){
		$retMenu = "<nav><ul>";
		foreach ($this->arrMenu as $opcion) {
			$retMenu .= "<li>".$opcion."</li>";
		}
		$retMenu .= "</ul></nav>";

		return $retMenu;
	}

}