<?php

include '../config/UserDao.php';

class UserController{

	public static function login($email_user, $pass_user){
		//Creamos un objeto del usuario (instanciamos)
		$obj_user = new User();
		$obj_user->setEmail_user($email_user);
		$obj_user->setPass_user($pass_user);

		return UserDao::login($obj_user);
	}
}