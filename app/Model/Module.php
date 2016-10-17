<?php
App::uses('AppModel', 'Model');

class Module extends AppModel {
	public $belongsTo=array('Course','Scheme');
	public $displayField = 'name';
	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Module Name is required !',
			),
		//	'isUnique' => array(
		//		'rule' => array('isUnique'),
		//		'message' => 'Module Name already exists !',
		//		'on'=>'create'
		//	),
		),
		'course_id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Select Course !',
			),
		),
		'semester' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Semester',
			),
		),
		'mark' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Mark is required !',
			),
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Mark must be a number !',

			),
		),
		'mh' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Enter Machine Hours !',

			),
		),
	);
}
