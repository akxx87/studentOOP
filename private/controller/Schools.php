<?php

/**
 * Schools controller
 */
class Schools extends Controller
{
	
	function index()
	{
	
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$shools = new School();


		$data = $shools->findAll();


		 $this->view('schools',['rows'=> $data]);
	}
}


