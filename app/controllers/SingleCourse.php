<?php 

/**
 * single course class
 */
class SingleCourse
{
	use Controller;

	public function index()
	{

		$this->view('student','singleCourse');
	}

}
