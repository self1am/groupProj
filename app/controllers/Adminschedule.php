<?php 

/**
 * schedule class
 */
class Adminschedule
{
	use Controller;

	public function index()
	{

		$this->view('streamAdmin','schedule');
	}

}