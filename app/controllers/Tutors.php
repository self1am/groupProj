<?php 

/**
 * tutor class
 */
class Tutors
{
	use Controller;

	public function index()
	{

		$this->view('student','tutors');
	}

}
