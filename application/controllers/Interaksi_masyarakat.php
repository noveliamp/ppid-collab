<?php

class Interaksi_masyarakat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('interaksi_masyarakat');
		$this->load->view('footer');
	}
}

