<?php
App::uses('AppModel', 'Model');
/**
 * Purchasedetail Model
 *
 * @property Purchase $Purchase
 * @property Brand $Brand
 * @property Product $Product
 */
class Purchasedetail extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'brand_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'model' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'qty' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'unitprice' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Purchase' => array(
			'className' => 'Purchase',
			'foreignKey' => 'purchase_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),

		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),

        'Brand' => array(
        'className' => 'Brand',
        'foreignKey' => 'brand_id',
        'conditions' => '',
        'fields' => '',
        'order' => ''
    ),

	);
     public function countStock($productId){
          return  $this->find('first',
                array(
                    'fields'=>array('SUM(qty) as purchaseQty ' ),
                     'group'=>array('product_id'),
                     'conditions'=>array('product_id'=>$productId),
                     'recursive'=> -1

            )


            );
    }


    public function GetPurchaseList(){
        $query = "Select *,Purchasedetail.qty - sd.qty as remainingqty  From purchasedetails as Purchasedetail
         LEFT JOIN   (
               SELECT *, sum(quantity) as qty
               FROM    sellsdetails  sdd Group By sdd.purchase_product_id
            )  sd  ON (Purchasedetail.id = sd.purchase_product_id)
         LEFT JOIN products Product on Product.id =  Purchasedetail.product_id
         LEFT JOIN brands Brand on Brand.id =  Purchasedetail.brand_id  ";

        return $this->query($query);
    }

    public function getSellsReport(){

        $query = "select *, (purchasedetails.qty*purchasedetails.unitprice) as totalPurchsePrice, products.name as productsName, brands.name as brandsName from purchasedetails left join
        (select  * , sum(quantity) as total_quantity, sum(price*quantity) as total_price  from sellsdetails
         group by  purchase_product_id ) as totalsellsinfo
         on totalsellsinfo.purchase_product_id = purchasedetails.id
         left join products on products.id = purchasedetails.product_id
         left join brands on brands.id = purchasedetails.brand_id
         left join sells on  totalsellsinfo.sell_id = sells.id
         WHERE 1=1 and sells.date between '2013-09-06' and  '2013-09-06'";
        return $this->query($query);
     }


}
