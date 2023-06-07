<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_register extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
	public function index()
	{
        $showModal = '';
        if($_POST){
             $data=[
            "name"=>$this->input->post('name'),
            "lastName"=>$this->input->post('lastName'),
            "email"=>$this->input->post('email'),
            "password"=>$this->input->post('password')
        ];
      //  print_r($data);

        $query = $this->db->query('SELECT * FROM users ;');//se llama por procedimiento l almacenado
        $resultado = $query->result();
        $dato=$this->input->post('email');
foreach ($resultado as $result){
    if($this->input->post('email')==$result->email){
         // echo "ya existe el correo";
        $dato=$result->email;
          $showModal=false;
     }else{
        $showModal=true;
    }
}

if($showModal){
    $queryPost=$this->db->insert('users',$data);  
    header("Location: ../index.php");
}



        }

        if($showModal){
            echo '<div class="alert alert-primary" role="alert">
                    Datos incorrectos!
                   </div>';
            }
       
    

        
        $this->load->view('register');

    }

}