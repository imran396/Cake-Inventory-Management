<?php
App::uses('AppModel', 'Model');
/**
 * Productserial Model
 *
 * @property Product $Product
 * @property Purchase $Purchase
 */
class Productserial extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'product_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'serial_no' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'purchase_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(

		'Purchasedetail' => array(
			'className' => 'Purchasedetail',
			'foreignKey' => 'purchasedetail_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),

	);

    public function insert($data){
        $serial = $data['Productserial']['serial_no'];
        $purchasedetails_id = $data['Productserial']['purchasedetail_id'];
        $sql = "INSERT INTO productserials SET serial_no = '$serial', purchasedetail_id = '$purchasedetails_id', status = '0'";

       if($this->checkSerial($purchasedetails_id,$serial)){
         $this->query($sql);
       }
    }

    private function checkSerial($pid,$serialNo){
        return $this->find('first',array('conditions'=>array('purchasedetail_id'=>$pid,'serial_no'=>$serialNo)));
    }
}
