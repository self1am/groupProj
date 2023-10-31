<?php 

/**
 * admin dashboard class
 */
class Admindashboard
{
	use Controller;

	public function index()
	{

		$this->view('streamAdmin','dashboard');
	}

}