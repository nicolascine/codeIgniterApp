<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* [User]
 * This function, is my entry to ~
 * @input
 * @ouput
 *
 */

class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('miHelper');
		$this->load->helper('form');
	}
	function index(){
		$params = array('Inicio', 'Contacto', 'Cursos');
		$this->load->library('menu', $params);
		$data['miMenu'] = $this->menu->construirMenu();
		$data['saludo'] = "Bienvenido al controlador User ;)";
		$this->load->view('user/index', $data);
	}
}