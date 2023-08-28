<?php

/**
 * User model
 */
class User extends Model
{
	protected $allowedColumns = [
		'firstname', 
		'lastname', 
		'email',
		'password',
		'gender',
		'rank',
		'date'
	];

	protected $beforeInsert = [
		'make_user_id', 
		'make_school_id', 
		'hash_password'
	];

	public function validate($DATA)
	{
		$this->errors = array();

		//cheack first name
		if (empty($DATA['firstname'])||!preg_match('/^[a-zA-Z]+$/', $DATA['firstname'])) {
			
			$this->errors['firstname'] = "Only letters allowed in firstname";
		}

		//cheack last name
		if (empty($DATA['lastname'])||!preg_match('/^[a-zA-Z]+$/', $DATA['lastname'])) {
			
			$this->errors['lastname'] = "Only letters allowed in lastname";
		}

		//check email
		if (empty($DATA['email']) || !filter_var($DATA['email'],FILTER_VALIDATE_EMAIL) ) {
			
			$this->errors['email'] = "Email is not valid";
		}

		//check if email exsites
		if ($this->where('email', $DATA['email'] )) {
			
			$this->errors['email'] = "that email is alledy used";
		}

		//check passwords lenght
		if(strlen( $DATA['password']) < 8 )
		{
			
			$this->errors['password'] = "The password must be 8 chars long";
		}

		//check passwords
		if (empty($DATA['password']) || $DATA['password'] !== $DATA['password2']) {
			
			$this->errors['password'] = "The password do not match";
		}

		//check gender
		$genders = ['female' , 'male'];

		if (empty($DATA['gender']) || !in_array($DATA['gender'], $genders)) {
			
			$this->errors['gender'] = "The gender do not match";
		}

		//check rank
		$ranks = ['student' , 'reception', 'lecture', 'admin', 'super_admin'];

		if (empty($DATA['rank']) || !in_array($DATA['rank'], $ranks)) {
			
			$this->errors['rank'] = "The rank do not match";
		}

		if(count($this->errors) == 0)
		{
			return true;
		}

		return false ;
	}

	public function make_user_id($data)
	{
		$data['user_id'] = random_string(60);
		return $data;
	}

	public function make_school_id($data)
	{
		if(isset($_SESSION['USER']->school_id))
		{
			$data['school_id'] = $_SESSION['USER']->school_id;
		}
		return $data;
	}

	public function hash_password($data)
	{
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
		return $data;
	}
}