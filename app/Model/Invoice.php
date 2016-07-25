<?php

App::uses('AppModel', 'Model');

/**
 * Invoice Model
 *
 * @property Order $Order
 * @property InvoiceItem $InvoiceItem
 */
class Invoice extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'order_id';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'order_id' => array(
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
        'Order' => array(
            'className' => 'Order',
            'foreignKey' => 'order_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Representative' => array(
            'className' => 'Representative',
            'foreignKey' => 'representative_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'InvoiceItem' => array(
            'className' => 'InvoiceItem',
            'foreignKey' => 'invoice_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

}
