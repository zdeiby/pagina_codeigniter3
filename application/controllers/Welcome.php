<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	public function index()
	{	
		      
        $query = $this->db->query('SELECT * FROM users ;');//se llama por procedimiento l almacenado
        $resultado = $query->result();
	//	print_r($resultado);
       // $query->next_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
      //  $query->free_result(); // Estas dos funciones permiten realizar varias consultas en el mismo controlador.
       // return $resultado;

		$this->load->view('welcome_message');
	}
}
