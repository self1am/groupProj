<?php 

/**
 * panel class
 */
class Adminpanel
{
	use Controller;

	public function index()
	{

		$this->view('streamAdmin','panel');
	}

}