<?php
App::uses('AppController', 'Controller');
/**
 * Purchasedetails Controller
 *
 * @property Purchasedetail $Purchasedetail
 */
class PurchasedetailsController extends AppController {
    public $helpers = array('Form', 'Html', 'Js', 'Time','Inventory');

/**
 * index method
 *
 * @return void
 */
	public function index($id) {
		$this->Purchasedetail->recursive = 0;
        $this->paginate = array('conditions'=>array('Purchasedetail.purchase_id'=>$id));

		$this->set('purchasedetails', $this->paginate());
	}

    public function sellsitems() {
		$this->Purchasedetail->recursive = 0;
		$this->set('purchasedetails', $this->Purchasedetail->GetPurchaseList());
        $this->layout = "ajaxdefault";
        if(isset($_REQUEST['sellID'])){
            $this->set('sellId', $_REQUEST['sellID']);
            $this->render('selledititems');
        }

	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Purchasedetail->id = $id;
		if (!$this->Purchasedetail->exists()) {
			throw new NotFoundException(__('Invalid purchasedetail'));
		}
		$this->set('purchasedetail', $this->Purchasedetail->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if ($this->request->is('post')) {
			$this->Purchasedetail->create();
			if ($this->Purchasedetail->save($this->request->data)) {
				$this->Session->setFlash(__('The purchasedetail has been saved'));
				$this->redirect(array('action' => 'index',$this->request->data['Purchasedetail']['purchase_id']));
			} else {
				$this->Session->setFlash(__('The purchasedetail could not be saved. Please, try again.'));
			}
		}

		$purchases = $this->Purchasedetail->Purchase->find('list');
		$products = $this->Purchasedetail->Product->find('list');
		$brands =  $this->Purchasedetail->Brand->find('list');
        $this->set('id', $id);
		$this->set(compact('purchases', 'brands', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Purchasedetail->id = $id;
		if (!$this->Purchasedetail->exists()) {
			throw new NotFoundException(__('Invalid purchasedetail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Purchasedetail->save($this->request->data)) {
				$this->Session->setFlash(__('The purchasedetail has been saved'));
				$this->redirect(array('action' => 'index',$this->request->data['Purchasedetail']['purchase_id']));
			} else {
				$this->Session->setFlash(__('The purchasedetail could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Purchasedetail->read(null, $id);
		}
		$purchases = $this->Purchasedetail->Purchase->find('list');
		$brands = $this->Purchasedetail->Brand->find('list');
		$products = $this->Purchasedetail->Product->find('list');
		$this->set(compact('purchases', 'brands', 'products'));
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
		$this->Purchasedetail->id = $id;
		if (!$this->Purchasedetail->exists()) {
			throw new NotFoundException(__('Invalid purchasedetail'));
		}
		if ($this->Purchasedetail->delete()) {
			$this->Session->setFlash(__('Purchasedetail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Purchasedetail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

    public function addpurchases(){
        $this->layout = 'ajax';
	    $purchases = $this->Purchasedetail->Purchase->find('list');
		$products = $this->Purchasedetail->Product->find('list');
		$brands =  $this->Purchasedetail->Brand->find('list');
		$this->set(compact('purchases', 'brands', 'products'));

        $this->set('i', $this->request->data['counter']);
    }

    public function productlist(){
        $this->layout = "ajaxdefault";
        $this->Purchasedetail->recursive = 0;
        $this->paginate = array(
            'fields'=> array('Product.name','Product.id','Product.brand_id','Product.model','Brand.name'),
            'joins'=>array(
                array(
                    'table'=>'products',
                    'alias'=>'Product',
                    'conditions'=>'Product.id = Purchasedetail.product_id'
                ),
                array(
                    'table'=>'brands',
                    'alias'=>'Brand',
                    'conditions'=>'Product.brand_id = Brand.id'
                )
            )
            ,
            'conditions'=>array(
                'Purchasedetail.purchase_id'=> $this->request->data['purchaseId']
            ),
            'recursive'=>-1
        );

		$this->set('purchasedetails', $this->paginate());

    }
    public function addserial(){

        $this->layout = 'ajaxdefault';
        $this->set('productId',$this->request->data['productId']);
    }


}
