<?php 

/**
 * home class
 */
class Home
{
	use Controller;

	public function index()
	{

		$this->view('student','home');
	}

}
