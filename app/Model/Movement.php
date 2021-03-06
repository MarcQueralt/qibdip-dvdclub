<?php
App::uses('AppModel', 'Model');
/**
 * Movement Model
 *
 * @property Client $Client
 * @property Copy $Copy
 */
class Movement extends AppModel {
    /**
     * sort order
     *
     * @var array
     */
    public $order = array (
            "Movement.ended DESC"
    );
    /**
     * Virtual Fields
     *
     * @var array
     */
    public $virtualFields = array(
        "estimatedCost" => "(datediff(now(),Movement.started)+1)*(select daily_rate from formats f join copies c where f.id=c.format_id and c.id=Movement.copy_id)",
        "estimatedReturnDate" => "current_date()",
        "fiscalDate" => "CASE mov_type WHEN 'C' THEN started WHEN 'M' THEN ended ELSE null END",
        "fiscalMovement" => "CASE mov_type WHEN 'M' THEN NOT(COALESCE(prepaid,FALSE)) WHEN 'C' THEN COALESCE(prepaid,TRUE) ELSE FALSE END",
        "pending" => "(Movement.returned IS NULL OR Movement.returned=FALSE) AND DATEDIFF(NOW(),Movement.started)>1",
    );
    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
            'client_id' => array(
                            'numeric' => array(
                                            'rule' => array('numeric'),
                            //'message' => 'Your custom message here',
                            //'allowEmpty' => false,
                            //'required' => false,
                            //'last' => false, // Stop validation after this rule
                            //'on' => 'create', // Limit validation to 'create' or 'update' operations
                            ),
            ),
            'mov_type' => array(
                            'inlist' => array(
                                            'rule' => array('inlist',array('C','M')), // C => Copy rental and M => Money refund
                            //'message' => 'Your custom message here',
                            //'allowEmpty' => false,
                            //'required' => false,
                            //'last' => false, // Stop validation after this rule
                            //'on' => 'create', // Limit validation to 'create' or 'update' operations
                            ),
            ),
            'amount' => array(
                            'numeric' => array(
                                            'rule' => array('numeric'),
                            //'message' => 'Your custom message here',
                            //'allowEmpty' => false,
                            //'required' => false,
                            //'last' => false, // Stop validation after this rule
                            'on' => 'update', // Limit validation to 'create' or 'update' operations
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
            'Client' => array(
                            'className' => 'Client',
                            'foreignKey' => 'client_id',
                            'conditions' => '',
                            'fields' => '',
                            'order' => ''
            ),
            'Copy' => array(
                            'className' => 'Copy',
                            'foreignKey' => 'copy_id',
                            'conditions' => '',
                            'fields' => '',
                            'order' => ''
            )
    );
}
