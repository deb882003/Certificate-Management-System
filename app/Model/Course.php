<?php
App::uses('AppModel', 'Model');

class Course extends AppModel {

	public $displayField = 'name';


	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Course Name is required !',

			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'Course Code is required !',
				'on'=>'create'
			),
		),
		'code' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Course Code is required !',
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'Course Code already exists !',
				'on'=>'create'
			),
		),
		'duration' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Duration must be numeric !',
			),
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Course Duration is Required !',
			),
		),
	);
}
