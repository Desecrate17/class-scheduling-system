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
			'rooms' => $this->Admin_model->rooms_count(),
			'sections' => $this->Admin_model->section_count(),
			'courses' => $this->Admin_model->course_count()
		);
		$this->load->view('adminDashboards/admin', $data);
		$this->load->view('template/footer');
	}

	//FACULTY//
	public function facsub(){
		$subject['sub'] = $this->input->post('sub_list');
		foreach($subject['sub'] as $subjid){
			$data = $this->Admin_model->facsub($subjid);	
		}
		echo json_encode($data);
	}

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
		$data['info3'] =$this->Admin_model->view_faculty_info3($id);
		$data['department'] = $this->Admin_model->view_department();

		$data['subjects'] = $this->Admin_model->view_faculty_subjects($id);
		
		$data['position'] = $this->Admin_model->view_position();
		$data['day'] = $this->Admin_model->view_faculty_day();
		$this->load->view('template/header');
		$this->load->view('adminDashboards/viewFaculty',$data);
		$this->load->view('template/footer');
	}
	public function facushift(){
		$day = $this->input->post('day');
		$result = $this->Admin_model->view_faculty_shift($day);
		if(count($result)>0){
			$data = '';
			$data .= '<option value="">Select Shift</option>';
			foreach($result as $rows ){
				$data .= '<option value="'.$rows->Shift.'">'.$rows->Shift.'</option>';
			}
			echo $data;
		}

	}

	public function facutime(){
		$id = $this->input->post('tid');
		$day = $this->input->post('day');
		$shift = $this->input->post('shift');
		$result = $this->Admin_model->view_faculty_time2($id, $day, $shift);
		if(count($result)>0){
			$data = '';
			foreach($result as $rows ){
				$data .= 
				'<option value="'.$rows->TimeID.'">'.$rows->Time.'</option>';
			}
			echo $data;
		}

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

	//DEPARTMENT//
	public function department(){
		$data['department'] = $this->Admin_model->view_department();
		$data['subjects'] = $this->Admin_model->view_subjects();
		$this->load->view('template/header');
		$this->load->view('data/department',$data);
		$this->load->view('template/footer');	
	}

	public function addDepartment(){
		$response = array();
		$this->form_validation->set_rules('depname', 'Department Name', 'required|is_unique[department.DepartmentName]',array(
			'is_unique' => '%s already exist!'));
		$this->form_validation->set_rules('depcode', 'Department Code', 'required|is_unique[department.DepartmentCode]',array(
			'is_unique' => '%s already exist!'));
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

	public function get_department(){
		$data['department'] = $this->Admin_model->view_department_name($_GET['DepartmentID']);
		echo json_encode($data);
	}


	public function activateDepartment($id){
	    $this->Admin_model->act_department($id);
	    redirect('welcome_admin/department');
	}

	public function deleteDepartment($id){
	    $this->Admin_model->del_department($id);
	    redirect('welcome_admin/department');
	}

	//SUBJECT//

	public function get_subjects(){
		$data['subject'] = $this->Admin_model->view_subjects_name($_GET['SubjectID']);
		echo json_encode($data);
	}

	public function subjects(){
		$data['data'] = $this->Admin_model->view_faculty();
		// $data['data2'] =$this->Admin_model->view_subjects_name($_GET['id']);
		$data['department'] = $this->Admin_model->view_department();
		$data['subject'] = $this->Admin_model->view_subjects();
		$data['position'] = $this->Admin_model->view_position();
		$this->load->view('template/header');
		$this->load->view('data/subjects',$data);
		$this->load->view('template/footer');		
	}

	public function addSubject(){
		$response = array();
		$this->form_validation->set_rules('subj_code', 'Subject Code', 'required|is_unique[subject.SubjectCode]',array(
			'is_unique' => '%s already exist!'));
		$this->form_validation->set_rules('subj_name', 'Subject Name', 'required|alpha_numeric_spaces|is_unique[subject.SubjectName]',array(
			'is_unique' => '%s already exist!'));
		$this->form_validation->set_rules('units', 'No. of units', 'required|numeric');
		$this->form_validation->set_rules('hrs', 'No. of hours', 'required|numeric');
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

	public function editSubject(){		
	    $response = array();
		$this->form_validation->set_rules('subj_code', 'Subject Code', 'required');
		$this->form_validation->set_rules('subj_name', 'Subject Name', 'required|alpha_numeric_spaces');
		$this->form_validation->set_rules('units', 'No. of units', 'required|numeric');
		$this->form_validation->set_rules('hrs', 'No. of hours', 'required|numeric');
		if ($this->form_validation->run() == TRUE) {
			$data = $this->Admin_model->edit_subject();
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

	// public function getSubject(){
	// 	$id = $_POST['id']; 
	// 	$response = $this->Admin_model->edit_subjects($id);
	// 	echo json_encode($response);    
	// }
	//SUBJECT//

	//SECTION//
	public function section(){
		$data['data'] = $this->Admin_model->view_section();
		$data['department'] = $this->Admin_model->view_department();
		$this->load->view('template/header');
		$this->load->view('data/section',$data);
		$this->load->view('template/footer');
	}


	//COURSES//
	public function courses(){
		$data['data'] = $this->Admin_model->view_courses();
		$data['department'] = $this->Admin_model->view_department();
		$this->load->view('template/header');
		$this->load->view('data/courses',$data);
		$this->load->view('template/footer');
	}

	public function viewSched(){
		$this->load->view('template/header');
		$this->load->view('adminDashboards/view_schedule');
		$this->load->view('template/footer');
	}


	//ROOMS//
	public function rooms(){
		$data['room'] =$this->Admin_model->view_room_name();
		$data['dep_list'] = $this->Admin_model->departments();
		$data['list'] = $this->Admin_model->list_room();
		$this->load->view('template/header');
		$this->load->view('data/rooms',$data);
		$this->load->view('template/footer');
	}
			
	public function viewroomSched($id){
		$data['room'] = $this->Admin_model->room_name($id);
		$data['hey'] = $this->Admin_model->view_room_schedule($id);
		$this->load->view('template/header');
		$this->load->view('data/displayroom',$data);
		$this->load->view('template/footer');
	}

	public function add_room(){
		$response = array();
		$this->form_validation->set_rules('room_no', 'Room No', 'required');
		$this->form_validation->set_rules('room_type', 'Room Type', 'required');
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

	public function delete_subj()
    {
        $ids = $this->input->post('ids');
 
        $this->db->where_in('subjectLID', explode(",", $ids));
        $this->db->delete('subject_list');
 
        echo json_encode(['success'=>"Item Deleted successfully."]);
    }
    //TIME

    public function timetime(){
    	if(isset($_POST['day'])){
    		$output = '';
    		if($_POST["action"] == 'shift'){
				$query = $this->Admin_model->view_faculty_shift();
    		}
    	}
    }

    public function factime(){
		$time['time'] = $this->input->post('time_list');
		foreach($time['time'] as $timeid){
			$data = $this->Admin_model->factime($timeid);
		}
		echo json_encode($data);
	}

    public function delete_time()
    {
        $ids = $this->input->post('ids');
 
        $this->db->where_in('TimeLID', explode(",", $ids));
        $this->db->delete('time_list');
 
        echo json_encode(['success'=>"Item Deleted successfully."]);
    }
	
	//POLICY
    public function policy(){
		$data['data'] = $this->Admin_model->view_policy();
		$this->load->view('template/header');
		$this->load->view('policy',$data);
		$this->load->view('template/footer');
    }


    public function editPolicy(){
		$response = array();
		$this->form_validation->set_rules('pure', 'Pure Teaching', 'required|numeric');
		$this->form_validation->set_rules('admin', 'Administrative', 'required|numeric');
		$this->form_validation->set_rules('ext', 'Research and Extension', 'required|numeric');
		$this->form_validation->set_rules('head', 'Head', 'required|numeric');
		$this->form_validation->set_rules('semester', 'Semester', 'required|numeric');
		$this->form_validation->set_rules('morning', 'Morning', 'required|numeric');
		$this->form_validation->set_rules('afternoon', 'Afternoon', 'required|numeric');
		if ($this->form_validation->run() == TRUE) {
			$data = $this->Admin_model->update_policy();
			$response['status'] = TRUE;
			$response[] = $data;
		}
		else {
			$response['status'] = FALSE;
	    	$response['notif']	= validation_errors();
		}
		echo json_encode($response); 
    }
	
}
