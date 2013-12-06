<?php
App::uses('AppModel', 'Model');
/**
 * Sellsdetail Model
 *
 * @property Sell $Sell
 * @property Product $Product
 */
class Sellsdetail extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Sell' => array(
			'className' => 'Sell',
			'foreignKey' => 'sell_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)

	);

    public function countStock($productId){
          return  $this->find('first',
                array(
                    'fields'=>array('SUM(qty) as sellQty' ),
                     'group'=>array('product_id'),
                     'conditions'=>array('product_id'=>$productId),
                     'recursive'=> -1

                )
            );
    }


}
