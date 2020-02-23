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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */



	public function __construct(){
		parent::__construct();
		$this->load->library('session');
        $this->load->model('Welcome_Model','model');
		$this->load->helper('url'); 
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function getData(){
		// $query = $this->model->loadlongestopeningcrawl();
		// $query = $this->model->loadmostappearance();
		$query = $this->model->loadmostappearancespecies();
		// $query = $this->model->loadmostpilot();
		
        if($query){
            echo json_encode($query,JSON_UNESCAPED_UNICODE);
        }else{
            echo json_encode(array('error'=> TRUE,'message'=> 'No result found'));
        }
	}
}
