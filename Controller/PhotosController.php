<?php
App::uses('AppController', 'Controller');
class PhotosController extends AppController {
	public $layout = 'BootstrapCake.bootstrap';

	public $components = array('Paginator', 'Session');

	public $helpers = array('Gallery.Gallery');

	public $uses = array('Photo', 'Gallery.Album');

	public function index() {
		$cnd = array();
		$photos = $this->Photo->find('all', array('conditions'=>$cnd));
		$this->set(compact('photos'));
	}

	public function view($id=null) {
		$this->Album->id = $id;

		if (!$this->Album->exists()) {
			throw new NotFoundException(__d('gallery', 'This album does not exist'));
		}

		$this->Album->bindModel(
			array('belongsTo' => array(
				'Photo' => array(
					'className' => 'Photo',
					'foreignKey' => 'model_id',
				)
			))
		);

		$album = $this->Album->read(null);
		$user_id = $this->Auth->user('id');

		$this->set('title_for_layout', $album['Album']['title']);
		$this->set(compact('album', 'user_id'));
	}

	public function admin_gallery($id) {
		$this->set('id', $id);
	}

	public function admin_index() {
		$this->Photo->recursive = 0;
		$this->set('photos', $this->Paginator->paginate());
	}

	public function admin_reorder() {
		if ($this->request->is('post')) {
			$this->Photo->saveMany($this->request->data);
			exit();
		}
		$this->set('photos', $this->Photo->find('all'));
	}

	public function admin_view($id = null) {
		if (!$this->Photo->exists($id)) {
			throw new NotFoundException(__('Invalid photo'));
		}
		$options = array('conditions' => array('Photo.' . $this->Photo->primaryKey => $id));
		$this->set('photo', $this->Photo->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Photo->create();
			if ($this->Photo->save($this->request->data)) {
				// prepare a new Gallery.Album as well
				$this->loadModel('Gallery.Album');
				$album = $this->Album->init('Photo', $this->Photo->id);
				// rename it
				$album['Album']['title'] = $this->request->data['Photo']['title'];
				$this->Album->save($album);
				//
				$this->Session->setFlash(__('The photo has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The photo could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->Photo->exists($id)) {
			throw new NotFoundException(__('Invalid photo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Photo->save($this->request->data)) {
				// prepare a Gallery.Album as well
				$this->loadModel('Gallery.Album');
				$album = $this->Album->init('Photo', $this->Photo->id);
				// rename it
				$album['Album']['title'] = $this->request->data['Photo']['title'];
				$this->Album->save($album);
				//
				$this->Session->setFlash(__('The photo has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The photo could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Photo.' . $this->Photo->primaryKey => $id));
			$this->request->data = $this->Photo->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Invalid photo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Photo->delete()) {
			// prepare a Gallery.Album as well
			$this->loadModel('Gallery.Album');
			$album = $this->Album->init('Photo', $id);
			// delete it
			$this->requestAction('/gallery/albums/delete/'.$album['Album']['id']);
			//
			$this->Session->setFlash(__('The photo has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The photo could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
