<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class welcome_faculty extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		
	}
	
	public function index(){
		$this->load->view('dashboards/faculty');
	}
}