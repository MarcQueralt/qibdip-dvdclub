<?php
App::uses('AppModel', 'Model');
/**
 * Client Model
 *
 * @property Movement $Movement
 */
class Client extends AppModel {

    /**
     * Sort order
     *
     * @var string
     */
    public $order = 'surname';
    
    /**
     * Virtual fields
     * 
     * @var array
     */
    public $virtualFields = array(
        'fullname' => 'TRIM(CONCAT(Client.firstname," ",Client.surname))',
        'alphaname' => 'CONCAT(Client.surname,", ",Client.firstname)',
        'positiveBalance' => '@pb:=(SELECT COALESCE(SUM(movements.amount),0) FROM movements WHERE movements.client_id = Client.id AND movements.mov_type in ("M"))',
        'negativeBalance' => '@nb:=(SELECT COALESCE(SUM(movements.amount),0) FROM movements WHERE movements.client_id = Client.id AND movements.mov_type in ("C") and movements.prepaid=FALSE)',
        'balance' => '@pb-@nb',
    );

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'alphaname';
    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
            'surname' => array(
                            'notempty' => array(
                                            'rule' => array('notempty'),
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
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
            'Movement' => array(
                            'className' => 'Movement',
                            'foreignKey' => 'client_id',
                            'dependent' => false,
                            'conditions' => '',
                            'fields' => '',
                            'order' => 'Movement.id DESC',
                            'limit' => '',
                            'offset' => '',
                            'exclusive' => '',
                            'finderQuery' => '',
                            'counterQuery' => ''
            )
    );

}
