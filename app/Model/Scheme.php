<?php
App::uses('AppModel', 'Model');

class Scheme extends AppModel {

	public $displayField = 'name';

	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Scheme Name is required !',
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'Scheme Name already exists !',
				'on'=>'create'
			),
		),
		'code' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Scheme Code is required !',
					),
					'isUNique' => array(
						'rule' => array('isUNique'),
						'message' => 'Scheme Code is required !',
						'on'=>'create'
							),
		),
	);
}
