<?php
App::uses('AppController', 'Controller');
/**
 * Productserials Controller
 *
 * @property Productserial $Productserial
 */
class ProductserialsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index($id) {
		$this->Productserial->recursive = 0;
        $this->paginate = array('conditions'=> array('Productserial.purchasedetail_id' => $id ));
		$this->set('productserials', $this->paginate());
		$this->set('id', $id);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Productserial->id = $id;
		if (!$this->Productserial->exists()) {
			throw new NotFoundException(__('Invalid productserial'));
		}
		$this->set('productserial', $this->Productserial->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Productserial->create();
			if ($this->request->data) {
                  $start = $this->request->data['start'];
                  $end = $this->request->data['end'];

                for($i= $start;$i<= $end; $i++){
                    $this->request->data['Productserial']['serial_no'] = $i;
                    $this->request->data['Productserial']['purchasedetail_id']= $this->request->data['product_id'];
                    $this->Productserial->insert($this->request->data);
                }

				$this->Session->setFlash(__('The productserial has been saved'));
				$this->redirect(array('action' => 'index',$this->request->data['product_id']));
			} else {
				$this->Session->setFlash(__('The productserial could not be saved. Please, try again.'));
			}
		}
		$products = $this->Productserial->Product->find('list');
		$purchases = $this->Productserial->Purchase->find('list');
		$this->set(compact('products', 'purchases'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Productserial->id = $id;
		if (!$this->Productserial->exists()) {
			throw new NotFoundException(__('Invalid productserial'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Productserial->save($this->request->data)) {
				$this->Session->setFlash(__('The productserial has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The productserial could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Productserial->read(null, $id);
		}
		//$products = $this->Productserial->Product->find('list');
		//$purchases = $this->Productserial->Purchase->find('list');
		//$this->set(compact('products', 'purchases'));
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
		$this->Productserial->id = $id;
		if (!$this->Productserial->exists()) {
			throw new NotFoundException(__('Invalid productserial'));
		}
		if ($this->Productserial->delete()) {
			$this->Session->setFlash(__('Productserial deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Productserial was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
