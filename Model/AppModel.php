<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {
	/**
	 * various date to sql format
	 */
	public function date_to_sql($from) {
		// filter via query string has '' on unset inputs
		if ($from == '') return null;
		// \xC2\xA0 is &nbsp; entity
		$from = preg_replace("/(\s|\xc2\xa0)+/", '', $from);
		// missing dot
		if (preg_match('/^\d{1,2}\.\d{1,2}$/', $from))
			$from = $from . '.';
		// missing year
		if (preg_match('/^\d{1,2}\.\d{1,2}.$/', $from))
			$from = $from . date('Y');
		($date = date_create_from_format('j#n#y', $from))       # d-m-y
		|| ($date = date_create_from_format('j#n#Y', $from))    # d-m-yyyy
		|| ($date = date_create_from_format('j#n#Y', date('j.n.Y', strtotime($from))));
		return date_format($date, 'Y-m-d');
	}
	public function sql_to_date($date) {

	}
}
