<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_config extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->database();
       // $this->load->library('session');

    }
	public function index()
	{	
		      
        $query = $this->db->query('SELECT * FROM users ;');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        
        //$value = $this->session->userdata('key');
      // print_r($value) ;


		$this->load->view('config');
	}
}
