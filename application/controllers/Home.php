<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private $view_data;

	public function __construct()
	{
		parent::__construct();

		// view data
		$this->view_data = array();
	}


	public function index()
	{

		$this->load->view('includes/html-start', $this->view_data);
		$this->load->view('home/index', $this->view_data);
		$this->load->view('includes/html-end', $this->view_data);
	}
}
