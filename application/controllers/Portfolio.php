<?php

class Portfolio extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('portfolio');
		$this->load->view('footer');
	}
}

