<?php
App::uses('AppController', 'Controller');
/**
 * Sells Controller
 *
 * @property Sell $Sell
 */
class SellsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sell->recursive = 0;
		$this->set('sells', $this->paginate());
	}
    public $uses = array('Sell','Sellsdetail','Payment','Productserial');

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Sell->id = $id;
		if (!$this->Sell->exists()) {
			throw new NotFoundException(__('Invalid sell'));
		}
        $this->render('invoice');
		$this->set('sell', $this->Sell->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sell->create();
            $this->request->data['Sellproductserial'] = $this->update_serial_array($this->request->data['Sellsdetail']);

			if ($this->Sell->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The sell has been saved'));
                $lastInsertedId = $this->Sell->getInsertID();
                $paymentsData['Payment']['paidamount'] = $this->request->data['Sell']['amount'];
                $paymentsData['Payment']['invoiceId'] = $lastInsertedId;
                $this->Payment->save($paymentsData);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sell could not be saved. Please, try again.'));
			}
		}
		$companies = $this->Sell->Company->find('list');
        //$purchaseItems = $this->Puchasedetail->productlist();

        $products = ClassRegistry::init('Product')->find('list');
		$this->set(compact('companies','products'));

	}

    public function update_serial_array($data){
       // return $data;
        foreach($data as $key => $val){
           $serial_array[$key][] = array_filter(explode(',',$val['serial']));
           $serial_array[$key][] = $val['purchase_product_id'];
        }
       // var_dump($serial_array);
        //die;
        foreach($serial_array as $key => $val ){
            foreach($val[0] as $key => $serial){
                $this->Sell->update($serial,$val[1]);
            }
        }

        return $serial_array ;

    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Sell->id = $id;
		if (!$this->Sell->exists()) {
			throw new NotFoundException(__('Invalid sell'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sell->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The sell has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sell could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Sell->read(null, $id);
		}
        $totalPayments = $this->Payment->getPaidByInvoice($id);
        $this->set('toalpayment',$totalPayments[0][0]['totalpaid']);
		$companies = $this->Sell->Company->find('list');
		$this->set(compact('companies'));
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
		$this->Sell->id = $id;
		if (!$this->Sell->exists()) {
			throw new NotFoundException(__('Invalid sell'));
		}
		if ($this->Sell->delete()) {
			$this->Session->setFlash(__('Sell deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sell was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
