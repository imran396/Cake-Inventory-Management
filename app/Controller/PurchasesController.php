<?php
App::uses('AppController', 'Controller');
/**
 * Purchases Controller
 *
 * @property Purchase $Purchase
 */
class PurchasesController extends AppController {
  public $components = array('RequestHandler');
  public $uses = array('Purchase','Purchasedetail');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Purchase->recursive = 0;
		$this->set('purchases', $this->paginate());
	}



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Purchase->id = $id;
		if (!$this->Purchase->exists()) {
			throw new NotFoundException(__('Invalid purchase'));
		}
		//$this->set('purchase', $this->Purchase->read(null, $id));
        $this->layout = 'pdf';
        //$this->render('pdf/view');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
        if ($this->request->is('post')) {
			$this->Purchase->create();


			if ($this->Purchase->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The purchase has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase could not be saved. Please, try again.'));
			}
		}
		$companies = $this->Purchase->Company->find('list');
		$products = $this->Purchasedetail->Product->find('list');
		$brands = $this->Purchasedetail->Brand->find('list');
		$this->set(compact('brands','products','companies'));
		$this->render('edit');
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Purchase->id = $id;
		if (!$this->Purchase->exists()) {
			throw new NotFoundException(__('Invalid purchase'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Purchase->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The purchase has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Purchase->read(null, $id);
		}
		$companies = $this->Purchase->Company->find('list');
        $purchases = $this->Purchase->find('list');

		$products = ClassRegistry::init('Product')->find('list');
		$this->set(compact('purchases', 'brands', 'optionvalues', 'products','companies'));

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
		$this->Purchase->id = $id;
		if (!$this->Purchase->exists()) {
			throw new NotFoundException(__('Invalid purchase'));
		}
		if ($this->Purchase->delete()) {
			$this->Session->setFlash(__('Purchase deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Purchase was not deleted'));
		$this->redirect(array('action' => 'index'));
	}



}
