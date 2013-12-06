<?php
App::uses('AppController', 'Controller');
/**
 * Sellsproductserials Controller
 *
 * @property Sellsproductserial $Sellsproductserial
 */
class SellsproductserialsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sellsproductserial->recursive = 0;
		$this->set('sellsproductserials', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Sellsproductserial->id = $id;
		if (!$this->Sellsproductserial->exists()) {
			throw new NotFoundException(__('Invalid sellsproductserial'));
		}
		$this->set('sellsproductserial', $this->Sellsproductserial->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sellsproductserial->create();
			if ($this->Sellsproductserial->save($this->request->data)) {
				$this->Session->setFlash(__('The sellsproductserial has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sellsproductserial could not be saved. Please, try again.'));
			}
		}
		$sellsdetails = $this->Sellsproductserial->Sellsdetail->find('list');
		$this->set(compact('sellsdetails'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Sellsproductserial->id = $id;
		if (!$this->Sellsproductserial->exists()) {
			throw new NotFoundException(__('Invalid sellsproductserial'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sellsproductserial->save($this->request->data)) {
				$this->Session->setFlash(__('The sellsproductserial has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sellsproductserial could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Sellsproductserial->read(null, $id);
		}
		$sellsdetails = $this->Sellsproductserial->Sellsdetail->find('list');
		$this->set(compact('sellsdetails'));
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
		$this->Sellsproductserial->id = $id;
		if (!$this->Sellsproductserial->exists()) {
			throw new NotFoundException(__('Invalid sellsproductserial'));
		}
		if ($this->Sellsproductserial->delete()) {
			$this->Session->setFlash(__('Sellsproductserial deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sellsproductserial was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
