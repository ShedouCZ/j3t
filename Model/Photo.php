<?php
App::uses('AppModel', 'Model');

class Photo extends AppModel {
	public $displayField = 'title';

	public $order = array('Photo.ord'=>'asc');

	public $actsAs = array('Gallery.Gallery');

	public $dateFields  = array('created');

	public $virtualFields = array(
		'created_cz' => "DATE_FORMAT(`Photo`.`created`, '%e.%c.%Y')",
	);
	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public function beforeSave($options = array()) {
		parent::beforeSave($options);
		if (!empty($this->data['Photo']['created'])) {
			$this->data['Photo']['created'] = $this->date_to_sql($this->data['Photo']['created']);
		}

		return true;
	}
}
