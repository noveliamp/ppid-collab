<?php

class Pricing extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('pricing');
		$this->load->view('footer');
	}
}

