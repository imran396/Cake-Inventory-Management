<?php
App::uses('AppController', 'Controller');
/**
 * Sellsdetails Controller
 *
 * @property Sellsdetail $Sellsdetail
 */
class SellsdetailsController extends AppController {

    public $uses = array('Sellsdetail','Purchasedetail');
/**
 * index method
 *
 * @return void
 */
	public function index($id) {
		$this->Sellsdetail->recursive = 0;
        $this->paginate = array('conditions'=>array('Sellsdetail.sell_id'=>$id));
		$this->set('sellsdetails', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Sellsdetail->id = $id;
		if (!$this->Sellsdetail->exists()) {
			throw new NotFoundException(__('Invalid sellsdetail'));
		}
		$this->set('sellsdetail', $this->Sellsdetail->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sellsdetail->create();

            $this->request->data['Sellsdetail']['serial'] = implode(',',$this->request->data['Sellsdetail']['serial_no']);

			if ($this->Sellsdetail->save($this->request->data)) {
				$this->Session->setFlash(__('The sellsdetail has been saved'));
				$this->redirect(array('controller'=>'sells','action' => 'edit',$this->request->data['Sellsdetail']['sell_id']));
			} else {
				$this->Session->setFlash(__('The sellsdetail could not be saved. Please, try again.'));
			}
		}
		$sells = $this->Sellsdetail->Sell->find('list');
		$products = $this->Sellsdetail->Product->find('list');

		$this->set(compact('sells', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Sellsdetail->id = $id;
		if (!$this->Sellsdetail->exists()) {
			throw new NotFoundException(__('Invalid sellsdetail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sellsdetail->save($this->request->data)) {
				$this->Session->setFlash(__('The sellsdetail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sellsdetail could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Sellsdetail->read(null, $id);
		}
		$sells = $this->Sellsdetail->Sell->find('list');
		$products = $this->Sellsdetail->Product->find('list');
		$this->set(compact('sells', 'products'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null,$sell_id = null) {

		$this->Sellsdetail->id = $id;
		if (!$this->Sellsdetail->exists()) {
			throw new NotFoundException(__('Invalid sellsdetail'));
		}
		if ($this->Sellsdetail->delete()) {
			$this->Session->setFlash(__('Sellsdetail deleted'));
			$this->redirect(array('controller'=>'sells','action' => 'edit',$sell_id));
		}

	}

    public function addsells(){
        $this->layout = 'ajax';
        $this->set('i', $this->request->data['counter']);
        $sells = $this->Sellsdetail->Sell->find('list');
		$products = $this->Sellsdetail->Product->find('list');
		$this->set(compact('sells', 'products'));
    }

   public function calStock(){
      $this->layout = 'ajax';
      $sellQty =  $this->Sellsdetail->countStock($this->request->data['productId']);
      $purchaseQty =  $this->Purchasedetail->countStock($this->request->data['productId']);

       $sellrate = $products = $this->Sellsdetail->Product->find('first',array(
          'fields'=>array(
              'Product.unitprice'
            ),
           'conditions'=>array('Product.id'=>$this->request->data['productId']),
           'recursive'=> -1
       ));

       $producserials = ClassRegistry::init('Productserial')->find('list',array(
           'fields'=>array('serial_no'),
            'conditions'=>array('product_id'=> $this->request->data['productId'])
        ));

       $this->set(compact('sellQty','purchaseQty','sellrate','producserials'));
   }

  public function sellsadform(){
       $this->layout = "ajaxdefault";
       $serialsdata = ClassRegistry::init('Productserial')->find('list',array('fields'=>array('serial_no'),'conditions'=>array(
               'purchasedetail_id' => $_REQUEST['purchaseDetailsId'],
               'status'=>0
       ), 'recursive' =>-1));
      if(!empty($serialsdata)){
        $serials = array_combine($serialsdata, $serialsdata);
      } else{
          $serials = array();
      }

       $this->set('serial_array',$serials);
       $this->set('sellsData',$_REQUEST);
       if(isset($_REQUEST['sellsId'])){
           $this->render('sellseditform');
       }

   }


}
