<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class welcome_faculty extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		if(!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }
		$this->load->model('Faculty_model');
		
	}
	
	public function index(){
		$this->load->view('template/header');
		$this->load->view('facultyDashboards/faculty');
		$this->load->view('template/footer');
	}

	public function subjects(){
		$data['data'] = $this->Faculty_model->view_faculty();
		$data['choice'] = $this->Faculty_model->view_subjects();
		$data['subjects'] = $this->Faculty_model->yourSubjects($_SESSION['id']);
		$this->load->view('template/header');
		$this->load->view('facultyDashboards/subjects',$data);
		$this->load->view('template/footer');
	}

	public function facsub(){
		$subject['sub'] = $this->input->post('sub_list');
		foreach($subject['sub'] as $subjid){
			$data = $this->Faculty_model->facsub($subjid);	
		}
		echo json_encode($data);
	}

	

}