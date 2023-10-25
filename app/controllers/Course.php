<?php 

/**
 * course class
 */
class Course
{
	use Controller;

	public function index()
	{

		$this->view('student/course');
	}

}
