<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
       
        if(!$this->session->has_userdata('utilisateur'))
		{
			redirect('welcome/index');  
		}
		$this->load->model('Model');
    }
    public function index()
	{
		$data = array();
		$data['listeProduit'] = $this->Model->listeProduit();
		$data['mail'] = $this->session->userdata('mail');
        $data['content'] = 'page/home';
		$this->load->view('index',$data);
	}
    
}