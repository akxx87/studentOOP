<?php

/**
 * login controller
 */
class Login extends Controller
{
	
	function index()
	{
		$errors = array();
		if (count($_POST) > 0) 
		{
			$user = new User();
			if($row = $user->where('email', $_POST['email']))
			{
				
				if(password_verify($_POST['password'], $row[0]['password']))
				{
					Auth::authenticate($row);
					$this->redirect('/home');
				}
				
		
			}
			
			$errors['email'] = "wrong email or password";
			


		}
		 $this->view('login',[
		 	'errors' => $errors,
		 ]);
	}
}


