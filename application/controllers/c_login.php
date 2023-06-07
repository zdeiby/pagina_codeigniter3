<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        
    }
	public function index()
	{	      
        $query = $this->db->query('SELECT * FROM users ;');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $data=[
            'email'=>  $this->input->post('email'),
            'password'=> $this->input->post('password'),
        ];
        $showModal = '';
if($this->input->post('email')){
     foreach ($resultado as $result){
            if($data['email'] == $result->email && $data['password'] == $result->password){
              //  $this->session->set_userdata('user', $result->name);
                header("Location: ../index.php");
                $showModal=false;
            }else{
                $showModal=true;
            }
        }
      
}
if($showModal){
    echo '<div class="alert alert-primary" role="alert">
            Datos incorrectos!
           </div>';
    }
    
        
       // print_r($data);
      
        $login=$this->load->view('login', $showModal);
		return $login;
	}
}
