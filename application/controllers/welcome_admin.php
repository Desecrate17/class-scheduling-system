<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class welcome_admin extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		if(!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }
		$this->load->model('Admin_model');
		
	}
	
	public function index(){		
		$this->load->view('template/header');
		$data = array(
			'faculty' => $this->Admin_model->faculty_count(),
			'faculty_on' => $this->Admin_model->faculty_count2(),
			'faculty_off' => $this->Admin_model->faculty_count3(),
			'department' => $this->Admin_model->department_count(),
			'department_on' => $this->Admin_model->department_count2(),
			'department_off' => $this->Admin_model->department_count3(),
			'subjects' => $this->Admin_model->subjects_count(),
			'subjects_on' => $this->Admin_model->subjects_count2(),
			'subjects_off' => $this->Admin_model->subjects_count3(),
			'rooms' => $this->Admin_model->rooms_count()
		);
		$this->load->view('adminDashboards/admin', $data);
		$this->load->view('template/footer');
	}

	public function facsub(){
		$subject['sub'] = $this->input->post('sub_list');
		foreach($subject['sub'] as $subjid){
			$data = $this->Admin_model->facsub($subjid);	
		}
		echo json_encode($data);
	}
	//FACULTY//
	public function faculty(){
		$data['data'] = $this->Admin_model->view_faculty();
		$data['department'] = $this->Admin_model->view_department();
		$data['subjects'] = $this->Admin_model->view_subjects();
		$data['position'] = $this->Admin_model->view_position();
		$this->load->view('template/header');
		$this->load->view('data/faculty',$data);
		$this->load->view('template/footer');		
	}
	
	public function viewFaculty($id){
		$data['data'] =$this->Admin_model->view_faculty_name($id);
		$data['info'] =$this->Admin_model->view_faculty_info($id);
		$data['info2'] =$this->Admin_model->view_faculty_info2($id);
		$data['department'] = $this->Admin_model->view_department();
		$data['subjects'] = $this->Admin_model->view_subjects();
		$data['position'] = $this->Admin_model->view_position();
		$this->load->view('template/header');
		$this->load->view('adminDashboards/viewFaculty',$data);
		$this->load->view('template/footer');
	}

	public function addFaculty(){
		$response = array();
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('mname', 'Middle Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		if ($this->form_validation->run() == TRUE) {
			$data = $this->Admin_model->add_faculty();
			$response['status'] = TRUE;
			$response[] = $data;
		}
		else {
			$response['status'] = FALSE;
	    	$response['notif']	= validation_errors();
		}
		echo json_encode($response);    
	}

	public function editFaculty(){
		$response = array();
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('mname', 'Middle Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		if ($this->form_validation->run() == TRUE) {
			$data = $this->Admin_model->edit_faculty();
			$response['status'] = TRUE;
			$response[] = $data;
		}
		else {
			$response['status'] = FALSE;
	    	$response['notif']	= validation_errors();
		}
		echo json_encode($response);    
	}

	public function activateFaculty($id){
		
	    $this->Admin_model->act_faculty($id);
	    redirect('welcome_admin/faculty');
	}

	public function deleteFaculty($id){
		
	    $this->Admin_model->del_faculty($id);
	    redirect('welcome_admin/faculty');
	}
	//FACULTY//

	//DEPARTMENT//
	public function department(){
		$data['data2'] = $this->Admin_model->view_faculty();
		$data['department'] = $this->Admin_model->view_department();
		$data['subjects'] = $this->Admin_model->view_subjects();
		$data['position'] = $this->Admin_model->view_position();
		$this->load->view('template/header');
		$this->load->view('data/department',$data);
		$this->load->view('template/footer');	
	}

	public function viewDepartment($id){
		$data['data'] =$this->Admin_model->view_department_name($id);
		$data['data2'] = $this->Admin_model->view_department_info($id);
		$this->load->view('template/header');
		$this->load->view('adminDashboards/viewDepartment',$data);
		$this->load->view('template/footer');
	}

	public function addDepartment(){
		$response = array();
		$this->form_validation->set_rules('depname', 'Department Name', 'required');
		$this->form_validation->set_rules('depcode', 'Department Code', 'required');
		if ($this->form_validation->run() == TRUE) {
			$data = $this->Admin_model->add_department();
			$response['status'] = TRUE;
			$response[] = $data;
		}
		else {
			$response['status'] = FALSE;
	    	$response['notif']	= validation_errors();
		}
		echo json_encode($response);    
	}

	public function editDepartment(){
		$response = array();
		$this->form_validation->set_rules('depname', 'Department Name', 'required');
		$this->form_validation->set_rules('depcode', 'Department Code', 'required');
		if ($this->form_validation->run() == TRUE) {
			$data = $this->Admin_model->edit_department();
			$response['status'] = TRUE;
			$response[] = $data;
		}
		else {
			$response['status'] = FALSE;
	    	$response['notif']	= validation_errors();
		}
		echo json_encode($response);    
	}

	public function activateDepartment($id){
	    $this->Admin_model->act_department($id);
	    redirect('welcome_admin/department');
	}

	public function deleteDepartment($id){
	    $this->Admin_model->del_department($id);
	    redirect('welcome_admin/department');
	}
	//DEPARTMENT//

	//SUBJECT//
	public function subjects(){
		$data['data'] = $this->Admin_model->view_faculty();
		$data['department'] = $this->Admin_model->view_department();
		$data['subjects'] = $this->Admin_model->view_subjects();
		$data['position'] = $this->Admin_model->view_position();
		$this->load->view('template/header');
		$this->load->view('data/subjects',$data);
		$this->load->view('template/footer');		
	}

	public function addSubject(){
		$response = array();
		$this->form_validation->set_rules('subj_code', 'Subject Code', 'required');
		$this->form_validation->set_rules('subj_name', 'Middle Name', 'required');
		$this->form_validation->set_rules('units', 'No. of units', 'required');
		$this->form_validation->set_rules('hrs', 'No. of hours', 'required');
		$this->form_validation->set_rules('type', 'Subject Type', 'required');
		if ($this->form_validation->run() == TRUE) {
			$data = $this->Admin_model->add_subject();
			$response['status'] = TRUE;
			$response[] = $data;
		}
		else {
			$response['status'] = FALSE;
	    	$response['notif']	= validation_errors();
		}
		echo json_encode($response);    
	}

	public function editSubject($id){		
	    $response = array();
		$this->form_validation->set_rules('subj_code', 'Subject Code', 'required');
		$this->form_validation->set_rules('subj_name', 'Middle Name', 'required');
		$this->form_validation->set_rules('units', 'No. of units', 'required');
		$this->form_validation->set_rules('hrs', 'No. of hours', 'required');
		$this->form_validation->set_rules('type', 'Subject Type', 'required');
		if ($this->form_validation->run() == TRUE) {
			$data = $this->Admin_model->add_subject();
			$response['status'] = TRUE;
			$response[] = $data;
		}
		else {
			$response['status'] = FALSE;
	    	$response['notif']	= validation_errors();
		}
		echo json_encode($response);    
	}

	public function deleteSubject($id){
		
	    $this->Admin_model->del_subject($id);
	    redirect('welcome_admin/subjects');
	}

	public function activateSubject($id){
		
	    $this->Admin_model->act_subject($id);
	    redirect('welcome_admin/subjects');
	}

	public function getSubject(){
		$id = $_POST['id']; 
		$response = $this->Admin_model->edit_subjects($id);
		echo json_encode($response);    
	}
	//SUBJECT//
	public function viewSched(){
		$this->load->view('template/header');
		$this->load->view('adminDashboards/view_schedule');
		$this->load->view('template/footer');
	}

	//ROOMS//
	public function rooms(){
		$data['room'] =$this->Admin_model->view_room_name();
		$data['dep_list'] = $this->Admin_model->departments();
		$data['room_sched'] = $this->Admin_model->view_room_all();
		$this->load->view('template/header');
		$this->load->view('data/rooms',$data);
		$this->load->view('template/footer');
	}
				
	//ROOMS//

	//ROOMS//
	public function room_view(){
		$rooms= $this->input->post("rooms");
		$data['hey']=$this->Admin_model->view_room_schedule($rooms);
		$this->load->view('data/displayroom',$data);
				
	}


	public function add_room(){
		$response = array();
		$this->form_validation->set_rules('room_no', 'Room No', 'required');
		$this->form_validation->set_rules('room_type', 'Room Status', 'required');
		if ($this->form_validation->run() == TRUE) {
			$data = $this->Admin_model->add_room();
			$response['status'] = TRUE;
			$response[] = $data;
		}
		else {
			$response['status'] = FALSE;
	    	$response['notif']	= validation_errors();
		}
		echo json_encode($response);
	}
	//ROOMS//

	
	
}