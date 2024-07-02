<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		
			$data['title'] = 'Login';
			$this->load->view('lorpo/view_login', $data);
		

	}
}