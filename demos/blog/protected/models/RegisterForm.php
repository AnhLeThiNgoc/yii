<?php
class RegisterForm extends CFormModel {
	public $username;
	public $password;
	public $email;
	public $retypepassword;
	private $_identity;

	public function tableName() {
		return 'user';
	}

	public function rules() {
		return array(
			array('username, email, password', 'required'),
		);
	}
}