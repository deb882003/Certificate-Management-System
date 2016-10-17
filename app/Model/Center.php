<?php
App::uses('AppModel', 'Model');

class Center extends AppModel {

	public $displayField = 'name';


	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Center Name is required !',
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'Center Name already exists !',
				'on'=>'create',
			),
		),
		'code' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Code is required !',
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'Code already exists !',
				'on'=>'create'
			),
		),
	);
}
