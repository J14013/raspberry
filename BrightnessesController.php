<?php
App::uses('AppController', 'Controller');
/**
 * Sensors Controller
 *
 * @property Sensor $Sensor
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class BrightnessesController extends AppController {
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Brightness->recursive = 0;
		$this->set('brightnesses', $this->Paginator->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Brightness->exists($id)) {
			throw new NotFoundException(__('Invalid brightness'));
		}
		$options = array('conditions' => array('Brightness.' . $this->Brightness->primaryKey => $id));
		$this->set('brightness', $this->Brightnesses->find('first', $options));
	}
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Brightness->create();
			if ($this->Brightness->save($this->request->data)) {
				$this->Flash->success(__('The brightness has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The brightness could not be saved. Please, try again.'));
			}
		}
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Brightness->exists($id)) {
			throw new NotFoundException(__('Invalid brightness'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Brightness->save($this->request->data)) {
				$this->Flash->success(__('The brightness has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The brightness could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Brightness.' . $this->Brightness->primaryKey => $id));
			$this->request->data = $this->Brightness->find('first', $options);
		}
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Brightness->id = $id;
		if (!$this->Brightness->exists()) {
			throw new NotFoundException(__('Invalid brightness'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Brightness->delete()) {
			$this->Flash->success(__('The brightness has been deleted.'));
		} else {
			$this->Flash->error(__('The brightness could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
