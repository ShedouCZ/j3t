<?php
App::uses('AppModel', 'Model');

class Quote extends AppModel {
    public $displayField = 'author';

    public $order = array('Quote.ord'=>'asc');
}
