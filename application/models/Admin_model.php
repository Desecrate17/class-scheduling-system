<?php
class Admin_model extends CI_Model{
	public function __construct(){
		parent:: __construct();
	}
	public function view_faculty(){
		$query = $this->db->query("
			SELECT f.prof_id, f.first_name, f.middle_name, f.last_name, p.position_name, f.contact, d.department_name, f.status fs,
			d.status ds
			FROM faculty as f
			LEFT JOIN department as d
			ON f.department_code = d.department_code
			LEFT JOIN position as p
			ON f.position_code = p.position_code
		");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_faculty_name($id){
		$query = $this->db->query("
			SELECT f.first_name, f.middle_name, f.last_name,f.contact,
			FROM faculty as f
			WHERE f.prof_id = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_faculty_info($id){
		$query = $this->db->query("
			SELECT p.position_name, f.contact, d.department_name,s.subject_name, f.prefered_time
			FROM faculty as f
			LEFT JOIN department as d
			ON f.department_code = d.department_code
			LEFT JOIN position as p
			ON f.position_id = p.position_id
			LEFT JOIN subject as s 
			ON f.prefered_subject = s.subject_code
			WHERE f.prof_id = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function add_faculty(){
		$data = array(
			'first_name'=>$this->input->post('fname'),
			'middle_name'=>$this->input->post('mname'),
			'last_name'=>$this->input->post('lname'),
			'contact'=>$this->input->post('contact'),
			'position_code'=>$this->input->post('position'),
			'department_code'=>$this->input->post('depCode'),
			'status' => "A"
		
		);
		$this->db->insert('faculty', $data);

	}

	public function act_faculty($id){
		$data = array('status' => 'A');
		$this->db->where('prof_id',$id);
        return $this->db->update('faculty',$data);
	}
	public function del_faculty($id){
		$data = array('status' => 'D');
		$this->db->where('prof_id',$id);
        return $this->db->update('faculty',$data);
	}
	public function add_subject(){
		$data = array(
			'subject_code'=>$this->input->post('subj_code'),
			'subject_name'=>$this->input->post('subj_name'),
			'subject_unit'=>$this->input->post('units'),
			'subject_hrs'=>$this->input->post('hrs'),
			'subject_type'=>$this->input->post('type'),
			'status' => "A"
			// 'position_id'=>$this->input->post('position'),
		);
		$this->db->insert('subject', $data);
	}

	public function get_subjects($id){
		$query = $this->db->query("
			SELECT *
			FROM subject
			WHERE subject_id = $id 
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_subjects(){
		$query = $this->db->query("
			SELECT *
			FROM subject
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
			'subject_code' => $this->input->post('subj_code'),
			'subject_name'=> $this->input->post('subj_name'),
			'subject_unit'=> $this->input->post('units'),
			'subject_hrs'=> $this->input->post('hrs'),
			'subject_type'=> $this->input->post('type'),

		);
		$this->db->where('subject_id',$id);
        return $this->db->update('subject',$data);
	}

	public function act_subject($id){
		// return $this->db->delete('faculty', array('profId' => $profId));
		$data = array('status' => 'A');
		$this->db->where('subject_id',$id);
        return $this->db->update('subject',$data);
	}

	public function del_subject($id){
		// return $this->db->delete('faculty', array('profId' => $profId));
		$data = array('status' => 'D');
		$this->db->where('subject_id',$id);
        return $this->db->update('subject',$data);
	}

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
			WHERE department_id = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function view_department_info($id){
		$query = $this->db->query("
			SELECT p.position_name, f.contact, d.department_name,s.subject_name, f.prefered_time
			FROM faculty as f
			LEFT JOIN department as d
			ON f.department_code = d.department_code
			LEFT JOIN position as p
			ON f.position_id = p.position_id
			LEFT JOIN subject as s 
			ON f.prefered_subject = s.subject_code
			WHERE f.prof_id = '$id'
			");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function add_department(){
		$data = array(
			'department_name'=>$this->input->post('depname'),
			'department_code'=>$this->input->post('depcode'),
			'status' => "A"

		);
		$this->db->insert('department', $data);
	}

	public function act_department($id){
		// return $this->db->delete('faculty', array('profId' => $profId));
		$data = array('status' => 'A');
		$this->db->where('department_id',$id);
        return $this->db->update('department',$data);
	}

	public function del_department($id){
		// return $this->db->delete('faculty', array('profId' => $profId));
		$data = array('status' => 'D');
		$this->db->where('department_id',$id);
        return $this->db->update('department',$data);
	}

}