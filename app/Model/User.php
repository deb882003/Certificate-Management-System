<?php
App::uses('AppModel', 'Model');

class User extends AppModel {
	public $displayField = 'name';
	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Name is required !',
			),
		),
		'mail_id' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Not a valid E-Mail fornat !',
			),
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'E-Mail ID is required !',
			),
		),
		'user_id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'User ID isrequired !',
			),
      'isUnique'=>array(
        'rule'=>'isUnique',
        'message'=>'User ID already exists !',
        'on' => 'create',
      ),
		),
		'password' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Password is required !',
			),
		),
	);
}
