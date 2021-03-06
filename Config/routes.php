<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/o-vystave-2', array('controller' => 'pages', 'action' => 'display', 'o-vystave'));
	Router::connect('/o-vystave', array('controller' => 'quotes', 'action' => 'index'));
	Router::connect('/galerie', array('controller' => 'photos', 'action' => 'view'));
	//Router::connect('/galerie/:id', array('controller' => 'photos', 'action' => 'view', 'id' => '[0-9]+'), array('pass' => array('id')));
	Router::connect('/cmkos-a19fc626d', array('controller' => 'pages', 'action' => 'display', 'cmkos'));
	Router::connect('/kontakt', array('controller' => 'pages', 'action' => 'display', 'kontakt'));
	Router::connect('/no-stress', array('controller' => 'pages', 'action' => 'display', 'no-stress'));
	Router::connect('/foto-do-koupelny', array('controller' => 'pages', 'action' => 'display', 'foto-do-koupelny'));

	Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
	Router::connect('/admin', array('controller' => 'photos', 'action' => 'index', 'admin' => true));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
