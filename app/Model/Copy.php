<?php
App::uses('AppModel', 'Model');
/**
 * Copy Model
 *
 * @property Format $Format
 * @property Movement $Movement
 */
class Copy extends AppModel {
    /**
     * Sort order
     *
     * @var string
     */
    public $order = 'Copy.id DESC';
    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'copy_complete_name';
    public $virtualFields = array(
        'copy_complete_name'=>'CONCAT(LPAD(Copy.label,4,"0")," - ",Copy.title)',
        'copy_sales'=>'select sum(m.amount) from movements m where m.copy_id=Copy.id and m.mov_type="C"',
    );
    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
            'title' => array(
                            'notempty' => array(
                                            'rule' => array('notempty'),
                            //'message' => 'Your custom message here',
                            //'allowEmpty' => false,
                            //'required' => false,
                            //'last' => false, // Stop validation after this rule
                            //'on' => 'create', // Limit validation to 'create' or 'update' operations
                            ),
            ),
            'format_id' => array(
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
            'Format' => array(
                            'className' => 'Format',
                            'foreignKey' => 'format_id',
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
            'Movement' => array(
                            'className' => 'Movement',
                            'foreignKey' => 'copy_id',
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
