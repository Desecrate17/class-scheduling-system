<?php
class Admin_model extends CI_Model{
	public function __construct(){
		parent:: __construct();
	}


	public function facsub($sub){
		$faculty_id = $this->input->post('fid');
		$this->db->set('ProfID', $faculty_id);
		$this->db->set('SubjectCode', $sub);
		$this->db->insert('subject_list');
	}
	// FACULTY //
	public function view_faculty(){
		$query = $this->db->query("
			SELECT f.ProfID, f.Firstname, f.Middlename, f.Lastname, p.PositionName, f.Contact, d.DepartmentName, f.Status fs,
			d.Status ds
			FROM faculty as f
			LEFT JOIN department as d ON f.DepartmentCode = d.DepartmentCode
			LEFT JOIN position as p ON f.PositionCode = p.PositionCode
		");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}


	public function view_faculty_name($id){
		$query = $this->db->query("
			SELECT f.ProfID, f.Firstname, f.Middlename, f.Lastname, f.Contact
			FROM faculty as f
			WHERE f.ProfID = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_faculty_info($id){
		$query = $this->db->query("
			SELECT f.ProfID, p.PositionName, f.Contact, d.DepartmentName, d.DepartmentCode, f.PreferredTime, p.PositionCode
			FROM faculty as f
			INNER JOIN department as d ON f.DepartmentCode = d.DepartmentCode
			INNER JOIN position as p ON f.PositionCode = p.PositionCode
			WHERE f.ProfID = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_faculty_info2($id){
		$query = $this->db->query("
			SELECT s.SubjectName, s.Status
			FROM faculty as f
			LEFT JOIN subject_list as sl ON f.ProfID = sl.ProfID
			LEFT JOIN subject as s ON sl.SubjectCode = s.SubjectCode
			WHERE f.ProfID = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function add_faculty(){
		$data = array(
			'Firstname'=>$this->input->post('fname'),
			'Middlename'=>$this->input->post('mname'),
			'Lastname'=>$this->input->post('lname'),
			'Contact'=>$this->input->post('contact'),
			'PositionCode'=>$this->input->post('position'),
			'DepartmentCode'=>$this->input->post('depCode'),
			'Status' => "A"
		
		);
		$this->db->insert('faculty', $data);


	}
	public function edit_faculty(){
		$first_name = $this->input->post('fname');
		$middle_name = $this->input->post('mname');
		$last_name = $this->input->post('lname');
		$contact = $this->input->post('contact');
		$position_code = $this->input->post('position');
		$department_code = $this->input->post('depCode');
		$prof_id = $this->input->post('fid');

		$this->db->set('Firstname', $first_name);
		$this->db->set('Middlename', $middle_name);
		$this->db->set('Lastname', $last_name);
		$this->db->set('Contact', $contact);
		$this->db->set('PositionCode', $position_code);
		$this->db->set('DepartmentCode', $department_code);
		$this->db->where('ProfID', $prof_id);

		$result = $this->db->update('faculty');
		
		// $data2 = array(
		// 	'faculty_id'=>$this->input->post('fid'),
		// 	'subject_code'=>$this->input->post('sub_list')
		// );
		// $this->db->insert('subject_list', $data2);
		return $result;

	}
	public function act_faculty($id){
		$data = array('Status' => 'A');
		$this->db->where('ProfID',$id);
        return $this->db->update('faculty',$data);
	}

	public function del_faculty($id){
		$data = array('status' => 'D');
		$this->db->where('ProfID',$id);
        return $this->db->update('faculty',$data);
	}
	// FACULTY //

	//DEPARTMENT//
	public function view_department(){
		$query = $this->db->query("
			SELECT *
			FROM department
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_department_name($id){
		$query = $this->db->query("
			SELECT *
			FROM department
			WHERE DepartmentID = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_department_info($id){
		$query = $this->db->query("
			SELECT f.ProfID, f.Firstname, f.Middlename, f.Lastname, p.PositionName, f.Contact, d.DepartmentName, f.Status fs,
			d.Status ds, f.PositionCode pc
			FROM faculty as f
			LEFT JOIN department as d ON f.DepartmentCode = d.DepartmentCode
			LEFT JOIN position as p ON f.PositionCode = p.PositionCode
			WHERE f.DepartmentCode = $id
		");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	// public function view_department_info($id){
	// 	$query = $this->db->query("
	// 		SELECT p.position_name, f.contact, d.department_name,s.subject_name, f.prefered_time
	// 		FROM faculty as f
	// 		LEFT JOIN department as d
	// 		ON f.department_code = d.department_code
	// 		LEFT JOIN position as p
	// 		ON f.position_id = p.position_id
	// 		LEFT JOIN subject as s 
	// 		ON f.prefered_subject = s.subject_code
	// 		WHERE f.prof_id = '$id'
	// 		");
	// 	if ($query->num_rows() > 0){
	// 		return $query->result();
	// 	}else{
	// 		return NULL;
	// 	}
	// }

	public function add_department(){
		$data = array(
			'DepartmentName'=>$this->input->post('depname'),
			'DepartmentCode'=>$this->input->post('depcode'),
			'Status' => "A"

		);
		$this->db->insert('department', $data);
	}

	public function edit_department(){
		$department_name = $this->input->post('depname');
		$department_code = $this->input->post('depcode');
		$department_id = $this->input->post('depID');

		$this->db->set('DepartmentName', $department_name);
		$this->db->set('DepartmentCode', $department_code);
		$this->db->where('DepartmentID', $department_id);

		$result = $this->db->update('department');
		return $result;
	}

	public function act_department($id){
		// return $this->db->delete('faculty', array('profId' => $profId));
		$data = array('Status' => 'A');
		$this->db->where('DepartmentID',$id);
        return $this->db->update('department',$data);
	}

	public function del_department($id){
		// return $this->db->delete('faculty', array('profId' => $profId));
		$data = array('Status' => 'D');
		$this->db->where('DepartmentID',$id);
        return $this->db->update('department',$data);
	}
	//DEPARTMENT//

	//SUBJECT//
	public function add_subject(){
		$data = array(
			'SubjectCode'=>$this->input->post('subj_code'),
			'SubjectName'=>$this->input->post('subj_name'),
			'subject_unit'=>$this->input->post('LecUnits'),
			'subject_hrs'=>$this->input->post('LecHours'),
			'SubjectType'=>$this->input->post('type'),
			'Status' => "A"
			// 'position_id'=>$this->input->post('position'),
		);
		$this->db->insert('subject', $data);
	}

	public function get_subjects($id){
		$query = $this->db->query("
			SELECT *
			FROM subject as s
			WHERE SubjectID = $id 
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_subjects(){
		$query = $this->db->query("
			SELECT s.SubjectID, s.SubjectCode, s.SubjectName, s.LecHours, s.LecUnits, s.LabHours, s.LabUnits, s.SubjectType, s.SubjectDeptCode, s.Status
			FROM subject as s
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function edit_subject($id){
		// return $this->db->delete('faculty', array('profId' => $profId));
		$data = array(
			'SubjectCode' => $this->input->post('subj_code'),
			'SubjectName'=> $this->input->post('subj_name'),
			// 'subject_unit'=> $this->input->post('units'),
			// 'subject_hrs'=> $this->input->post('hrs'),
			'SubjectType'=> $this->input->post('type'),

		);
		$this->db->where('SubjectID',$id);
        return $this->db->update('subject',$data);
	}

	public function act_subject($id){
		// return $this->db->delete('faculty', array('profId' => $profId));
		$data = array('Status' => 'A');
		$this->db->where('SubjectID',$id);
        return $this->db->update('subject',$data);
	}

	public function del_subject($id){
		// return $this->db->delete('faculty', array('profId' => $profId));
		$data = array('Status' => 'D');
		$this->db->where('SubjectID',$id);
        return $this->db->update('subject',$data);
	}
	//SUBJECT//

	
	public function view_position(){
		$query = $this->db->query("
			SELECT *
			FROM position
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	// ID COUNT //
	public function faculty_count(){
		$query = $this->db->query("
			SELECT COUNT(ProfID) AS prof_id
			FROM faculty
			");
		return $query->result();
	}

	public function faculty_count2(){
		$query = $this->db->query("
			SELECT COUNT(ProfID) AS prof_id
			FROM faculty
			WHERE status = 'A'
			");
		return $query->result();
	}

	public function faculty_count3(){
		$query = $this->db->query("
			SELECT COUNT(ProfID) AS prof_id
			FROM faculty
			WHERE status = 'D'
			");
		return $query->result();
	}

	public function department_count(){
		$query = $this->db->query("
			SELECT COUNT(DepartmentID) AS dep_id
			FROM department
			");
		return $query->result();
	}

	public function department_count2(){
		$query = $this->db->query("
			SELECT COUNT(DepartmentID) AS dep_id
			FROM department
			WHERE status = 'A'
			");
		return $query->result();
	}

	public function department_count3(){
		$query = $this->db->query("
			SELECT COUNT(DepartmentID) AS dep_id
			FROM department
			WHERE status = 'D'
			");
		return $query->result();
	}	

	public function subjects_count(){
		$query = $this->db->query("
			SELECT COUNT(SubjectID) AS sub_id
			FROM subject
			");
		return $query->result();
	}

	public function subjects_count2(){
		$query = $this->db->query("
			SELECT COUNT(SubjectID) AS sub_id
			FROM subject
			WHERE status = 'A'
			");
		return $query->result();
	}

	public function subjects_count3(){
		$query = $this->db->query("
			SELECT COUNT(SubjectID) AS sub_id
			FROM subject
			WHERE status = 'D'
			");
		return $query->result();
	}

	public function rooms_count(){
		$query = $this->db->query("
			SELECT COUNT(RoomID) AS room_id
			FROM room
			");
		return $query->result();
	}

	// ID COUNT //

	public function view_room_name(){

		$query = $this->db->query("
				SELECT * FROM room
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_room_all(){
		$query = $this->db->query("
			SELECT s.SchedName, s.SchedDays, f.Firstname, f.Middlename, f.Lastname, subj.SubjectName, r.RoomNo, r.RoomNo
			FROM schedule as s
			LEFT JOIN faculty as f
			ON s.SchedProf = f.ProfID
			LEFT JOIN subject as subj
			ON s.SubjectCode = subj.SubjectCode
			LEFT JOIN room as r
			ON s.SchedRoom = r.RoomID
			

			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}
	// s.sched_from, s.sched_length, s.sched_from
	public function view_room_schedule($rooms){
		$query = $this->db->query("
			SELECT s.SchedID, s.SchedName, s.SchedDays, f.Firstname, f.Middlename, f.Lastname, subj.SubjectName, r.RoomNo, r.RoomID, 
				FROM schedule as s
			LEFT JOIN faculty as f
			ON s.SchedProf = f.ProfID
			LEFT JOIN subject as subj
			ON s.SubjectCode = subj.SubjectCode
			LEFT JOIN room as r
			ON s.SchedRoom = r.RoomNo
			WHERE r.RoomID = '$rooms'

			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}


	public function add_room(){
		$data = array(
			'RoomNo'=>$this->input->post('room_no'),
			'RoomType'=>$this->input->post('room_type'),
			'RoomStatus'=>$this->input->post('room_stat'),
			'DepartmentCode'=>$this->input->post('dep')
		
		);
		$result = $this->db->insert('room', $data);
		return $result;


	}

	public function departments(){
			$query = $this->db->query("
				SELECT * 
				FROM department 
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}

}