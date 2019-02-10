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
			SELECT s.SubjectName, s.Status, sl.subjectLID
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
		if($this->input->post('type') == "Lecture"){
			$data = array(
			'SubjectCode'=>$this->input->post('subj_code'),
			'SubjectName'=>$this->input->post('subj_name'),
			'LecUnits'=>$this->input->post('units'),
			'LecHours'=>$this->input->post('hrs'),
			'SubjectType'=>$this->input->post('type'),
			'SubjectDeptCode'=>$this->input->post('dept'),
			'Status' => "A"
			);
		}
		else{
			$data = array(
			'SubjectCode'=>$this->input->post('subj_code'),
			'SubjectName'=>$this->input->post('subj_name'),
			'LabUnits'=>$this->input->post('units'),
			'LabHours'=>$this->input->post('hrs'),
			'SubjectType'=>$this->input->post('type'),
			'SubjectDeptCode'=>$this->input->post('dept'),
			'Status' => "A"
			);
		}
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
			SELECT DISTINCT s.SubjectID, s.SubjectCode, s.SubjectName, s.LecHours, s.LecUnits, s.LabHours, s.LabUnits, s.SubjectType, s.SubjectDeptCode, s.Status, d.DepartmentName
			FROM SUBJECT AS s
			LEFT JOIN department AS d ON s.SubjectDeptCode = d.DepartmentCode
			WHERE NOT EXISTS(
    			SELECT * FROM subject_list AS sl 
    			WHERE sl.SubjectCode = s.SubjectCode AND sl.ProfId= '1')
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


	//SECTION//
	public function view_section(){
		$query = $this->db->query("
			SELECT *
			FROM section as s
			LEFT JOIN department as d ON s.DepartmentCode = d.DepartmentCode 
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}
	//SECTION//

	//COURSES//
	public function view_courses(){
		$query = $this->db->query("
			SELECT c.CourseCode, c.CourseName, c.CourseType, d.DepartmentName
			FROM course as c
			LEFT JOIN department as d ON c.DepartmentCode = d.DepartmentCode 
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}
	//COURSES//

	
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

	public function add_room(){
		$data = array(
			'RoomNo'=>$this->input->post('room_no'),
			'RoomType'=>$this->input->post('room_type'),
			'DepartmentCode'=>$this->input->post('dep')
		
		);
		$result = $this->db->insert('room', $data);
		return $result;


	}

	public function list_room(){
		$query = $this->db->query("
				SELECT r.RoomID, r.RoomNo,  r.RoomType, r.DepartmentCode, d.DepartmentCode, d.DepartmentName, r.RoomStatus
 				FROM room as r
				LEFT JOIN department as d
				ON r.DepartmentCode = d.DepartmentID
 			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_room_schedule($id){
		$query = $this->db->query("
			SELECT s.SchedID, s.SchedName, s.SchedTime, s.SchedDays, f.Firstname, f.Middlename, f.Lastname, subj.SubjectName, r.RoomNo, r.RoomID, s.SubjectHours, s.SchedEnd
 			FROM schedule as s
			LEFT JOIN faculty as f
			ON s.SchedProf = f.ProfID
			LEFT JOIN subject as subj
			ON s.SubjectCode = subj.SubjectCode
			LEFT JOIN room as r
			ON s.SchedRoom= r.RoomID
			WHERE s.SchedRoom = '$id'

			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function room_name($id){

		$query = $this->db->query("
				SELECT * FROM room
				WHERE RoomID = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	// NEW EDIT --------- VIEW SCHEDULES ---------------------

	public function faculty_name()
	{
		$query = $this->db->query("
				SELECT *
				FROM faculty
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function math()
	{
		$query = $this->db->query("
				SELECT f.Lastname, f.Firstname, f.Lastname, f.ProfID, p.PositionName
   				FROM faculty as f
   				LEFT JOIN position as p
   				ON f.PositionCode = p.PositionCode
   				LEFT JOIN department as d
   				ON f.DepartmentCode = d.DepartmentCode
				WHERE f.DepartmentCode = 'MATH' AND f.Status = 'A'
				ORDER BY p.PositionCode, f.Lastname, f.Firstname ASC
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function physics()
	{
		$query = $this->db->query("
				SELECT f.Lastname, f.Firstname, f.Lastname, f.ProfID, p.PositionName
   				FROM faculty as f
   				LEFT JOIN position as p
   				ON f.PositionCode = p.PositionCode
   				LEFT JOIN department as d
   				ON f.DepartmentCode = d.DepartmentCode
				WHERE f.DepartmentCode = 'PHYS' AND f.Status = 'A'
				ORDER BY p.PositionCode, f.Lastname, f.Firstname ASC
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function chemistry()
	{
		$query = $this->db->query("
				SELECT f.Lastname, f.Firstname, f.Lastname, f.ProfID, p.PositionName
   				FROM faculty as f
   				LEFT JOIN position as p
   				ON f.PositionCode = p.PositionCode
   				LEFT JOIN department as d
   				ON f.DepartmentCode = d.DepartmentCode
				WHERE f.DepartmentCode = 'CHEM' AND f.Status = 'A'
				ORDER BY p.PositionCode, f.Lastname, f.Firstname ASC
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function faculty_name_2($id)
	{
		$query = $this->db->query("
				SELECT *
				FROM faculty as f
				WHERE f.ProfID = '$id'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function faculty_name_default()
	{
		$query = $this->db->query("
				SELECT *
				FROM faculty as f
				WHERE f.ProfID = '1'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function view_sched_default(){
			$query = $this->db->query("
				SELECT sc.SubjectName,sc.SchedDays,sc.SchedTime,sc.SchedEnd,f.Lastname,f.Firstname
				FROM schedule AS sc
				LEFT JOIN subject AS s
				ON sc.SubjectCode = s.SubjectCode
				LEFT JOIN faculty AS f
				ON sc.SchedProf = f.ProfID
				WHERE sc.SchedProf = '1'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}


	public function view_prof_sched($id){
			$query = $this->db->query("
				SELECT sc.SubjectName,sc.SchedDays,sc.SchedTime,sc.SchedEnd,f.Lastname,f.Firstname
				FROM schedule AS sc
				LEFT JOIN subject AS s
				ON sc.SubjectCode = s.SubjectCode
				LEFT JOIN faculty AS f
				ON sc.SchedProf = f.ProfID
				WHERE sc.SchedProf = '$id'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}

		public function department(){
			$query = $this->db->query("
				SELECT * 
				FROM department 
				WHERE status = 'A'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}

// NEW EDIT --------- VIEW SCHEDULES ---------------------

// NEW EDIT --------- VIEW SCHEDULES BY ROOM -------------------------
	public function room_default()
	{
		$query = $this->db->query("
				SELECT *
				FROM room as r
				WHERE r.RoomID= '1'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function math_room()
	{
		$query = $this->db->query("
				SELECT r.RoomNo, r.RoomID, r.RoomType
				FROM room AS r 
				WHERE r.DepartmentCode = 'MATH'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function physics_room()
	{
		$query = $this->db->query("
				SELECT r.RoomNo, r.RoomID, r.RoomType
				FROM room AS r 
				WHERE r.DepartmentCode = 'PHYSICS'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function chem_room()
	{
		$query = $this->db->query("
				SELECT r.RoomNo, r.RoomID, r.RoomType
				FROM room AS r 
				WHERE r.DepartmentCode = 'CHEMISTRY'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}

	public function view_room_default_sched(){
			$query = $this->db->query("
				SELECT sc.SubjectName,sc.SchedDays,sc.SchedTime,sc.SchedEnd
				FROM SCHEDULE AS sc
				LEFT JOIN SUBJECT AS s
				ON sc.SubjectCode = s.SubjectCode
				LEFT JOIN room AS r
				ON sc.SchedRoom = r.RoomID
				WHERE sc.SchedRoom = '1'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}


	public function view_room_sched($id){
			$query = $this->db->query("
				SELECT sc.SubjectName,sc.SchedDays,sc.SchedTime,sc.SchedEnd
				FROM SCHEDULE AS sc
				LEFT JOIN SUBJECT AS s
				ON sc.SubjectCode = s.SubjectCode
				LEFT JOIN room AS r
				ON sc.SchedRoom = r.RoomID
				WHERE sc.SchedRoom = '$id'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}

		public function room_name_2($id)
	{
		$query = $this->db->query("
				SELECT *
				FROM room as r
				WHERE r.RoomID = '$id'
			");
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
	}


// NEW EDIT --------- VIEW SCHEDULES BY ROOM -------------------------

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