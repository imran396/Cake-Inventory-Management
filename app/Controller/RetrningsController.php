<?php
App::uses('AppController', 'Controller');
/**
 * Retrnings Controller
 *
 * @property Retrning $Retrning
 */
class RetrningsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Retrning->recursive = 0;
		$this->set('retrnings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Retrning->id = $id;
		if (!$this->Retrning->exists()) {
			throw new NotFoundException(__('Invalid retrning'));
		}
		$this->set('retrning', $this->Retrning->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Retrning->create();
			if ($this->Retrning->save($this->request->data)) {
				$this->Session->setFlash(__('The retrning has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retrning could not be saved. Please, try again.'));
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
		$this->Retrning->id = $id;
		if (!$this->Retrning->exists()) {
			throw new NotFoundException(__('Invalid retrning'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Retrning->save($this->request->data)) {
				$this->Session->setFlash(__('The retrning has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retrning could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Retrning->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Retrning->id = $id;
		if (!$this->Retrning->exists()) {
			throw new NotFoundException(__('Invalid retrning'));
		}
		if ($this->Retrning->delete()) {
			$this->Session->setFlash(__('Retrning deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Retrning was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
