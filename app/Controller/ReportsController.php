<?php
App::uses('AppController', 'Controller');
/**
 * Values Controller
 *
 * @property Value $Value
 */
class ReportsController extends AppController {
    public $uses = array('Purchasedetail');

    public function index(){
       $data = $this->Purchasedetail->getSellsReport();
       $this->set('data',$data);
    }
}

