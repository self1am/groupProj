<?php 

/**
 * dashboard class
 */
class Dashboard
{
	use Controller;

	public function index()
	{

		$this->view('student','dashboard');
	}

}