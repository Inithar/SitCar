<?php
	namespace app\transfer;

	class User{
		public $email;
		public $role;
		
		public function __construct($email, $role){
			$this->email = $email;
			$this->role = $role;		
		}	
	}
?> 