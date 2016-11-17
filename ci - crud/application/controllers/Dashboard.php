<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Auth_Controller {
	
	public function index()
	{
		$data['judul'] = "halaman Dashboard";
		
		$this->load_template('dashboard', $data);
	}
}
