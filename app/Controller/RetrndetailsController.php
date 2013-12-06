<?php
App::uses('AppController', 'Controller');
/**
 * Retrndetails Controller
 *
 * @property Retrndetail $Retrndetail
 */
class RetrndetailsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Retrndetail->recursive = 0;
		$this->set('retrndetails', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Retrndetail->id = $id;
		if (!$this->Retrndetail->exists()) {
			throw new NotFoundException(__('Invalid retrndetail'));
		}
		$this->set('retrndetail', $this->Retrndetail->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Retrndetail->create();
			if ($this->Retrndetail->save($this->request->data)) {
				$this->Session->setFlash(__('The retrndetail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retrndetail could not be saved. Please, try again.'));
			}
		}
		$retrnings = $this->Retrndetail->Retrning->find('list');
		$sells = $this->Retrndetail->Sell->find('list');
		$products = $this->Retrndetail->Product->find('list');
		$this->set(compact('retrnings', 'sells', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Retrndetail->id = $id;
		if (!$this->Retrndetail->exists()) {
			throw new NotFoundException(__('Invalid retrndetail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Retrndetail->save($this->request->data)) {
				$this->Session->setFlash(__('The retrndetail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retrndetail could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Retrndetail->read(null, $id);
		}
		$retrnings = $this->Retrndetail->Retrning->find('list');
		$sells = $this->Retrndetail->Sell->find('list');
		$products = $this->Retrndetail->Product->find('list');
		$this->set(compact('retrnings', 'sells', 'products'));
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
		$this->Retrndetail->id = $id;
		if (!$this->Retrndetail->exists()) {
			throw new NotFoundException(__('Invalid retrndetail'));
		}
		if ($this->Retrndetail->delete()) {
			$this->Session->setFlash(__('Retrndetail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Retrndetail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
