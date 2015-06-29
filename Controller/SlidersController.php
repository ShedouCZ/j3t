<?php
App::uses('AppController', 'Controller');
class SlidersController extends AppController {
	public $layout = 'BootstrapCake.bootstrap';

	public $components = array('Paginator', 'Session');


	public function index() {
		$items = $this->paginate();
		if ($this->request->is('requested')) {
			return $items;
		}
		$this->set('items', $items);
	}

	public function admin_index() {
		$this->Slider->recursive = 0;
		$this->set('sliders', $this->Paginator->paginate());
	}

	public function admin_reorder() {
		if ($this->request->is('post')) {
			$this->Slider->saveMany($this->request->data);
			exit();
		}
		$this->set('sliders', $this->Slider->find('all'));
	}

	public function admin_view($id = null) {
		if (!$this->Slider->exists($id)) {
			throw new NotFoundException(__('Invalid slider'));
		}
		$options = array('conditions' => array('Slider.' . $this->Slider->primaryKey => $id));
		$this->set('slider', $this->Slider->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Slider->create();
			if ($this->Slider->save($this->request->data)) {
				$this->Session->setFlash(__('The slider has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The slider could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->Slider->exists($id)) {
			throw new NotFoundException(__('Invalid slider'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Slider->save($this->request->data)) {
				$this->Session->setFlash(__('The slider has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The slider could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Slider.' . $this->Slider->primaryKey => $id));
			$this->request->data = $this->Slider->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->Slider->id = $id;
		if (!$this->Slider->exists()) {
			throw new NotFoundException(__('Invalid slider'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Slider->delete()) {
			$this->Session->setFlash(__('The slider has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The slider could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
