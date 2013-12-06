<?php
App::uses('AppController', 'Controller');
/**
 * Openingbalances Controller
 *
 * @property Openingbalance $Openingbalance
 */
class OpeningbalancesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Openingbalance->recursive = 0;
		$this->set('openingbalances', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Openingbalance->id = $id;
		if (!$this->Openingbalance->exists()) {
			throw new NotFoundException(__('Invalid openingbalance'));
		}
		$this->set('openingbalance', $this->Openingbalance->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Openingbalance->create();
			if ($this->Openingbalance->save($this->request->data)) {
				$this->Session->setFlash(__('The openingbalance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The openingbalance could not be saved. Please, try again.'));
			}
		}
		$products = $this->Openingbalance->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Openingbalance->id = $id;
		if (!$this->Openingbalance->exists()) {
			throw new NotFoundException(__('Invalid openingbalance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Openingbalance->save($this->request->data)) {
				$this->Session->setFlash(__('The openingbalance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The openingbalance could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Openingbalance->read(null, $id);
		}
		$products = $this->Openingbalance->Product->find('list');
		$this->set(compact('products'));
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
		$this->Openingbalance->id = $id;
		if (!$this->Openingbalance->exists()) {
			throw new NotFoundException(__('Invalid openingbalance'));
		}
		if ($this->Openingbalance->delete()) {
			$this->Session->setFlash(__('Openingbalance deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Openingbalance was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
