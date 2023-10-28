<?php 

/**
 * syllabus class
 */
class Syllabus
{
	use Controller;

	public function index()
	{

		$this->view('student','syllabus');
	}

}
