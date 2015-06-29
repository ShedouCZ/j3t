<?php
App::uses('AppModel', 'Model');

class Slider extends AppModel {
	public $displayField = 'title';

	public $order = array('Slider.ord'=>'asc');

}
