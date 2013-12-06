<?php
App::uses('AppModel', 'Model');
/**
 * Payment Model
 *
 */
class Payment extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'invoiceId' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'paidamount' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

    public function getPaidByInvoice($invoiceId){
        return $this->query("SELECT SUM(paidamount) AS totalpaid FROM payments AS Payment GROUP BY invoiceId  HAVING invoiceId = '$invoiceId'");
    }
}
