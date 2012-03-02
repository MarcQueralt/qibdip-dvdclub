<?php
App::uses('AppController', 'Controller');
/**
 * Movements Controller
 *
 * @property Movement $Movement
 */
class MovementsController extends AppController {
    public $components = array(
            'Session',
            'Auth');
    /**
     * Helpers
     *
     * @var array
     */
//	public $helpers = array('Ajax', 'Javascript', 'Time');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Movement->recursive = 0;
        $this->set('movements', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Movement->id = $id;
        if (!$this->Movement->exists()) {
            throw new NotFoundException(__('Invalid movement'));
        }
        $this->set('movement', $this->Movement->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Movement->create();
            if ($this->Movement->save($this->request->data)) {
                $this->Session->setFlash(__('The movement has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The movement could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Movement->Client->find('list');
        $copies = $this->Movement->Copy->find('list');
        $this->set(compact('clients', 'copies'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Movement->id = $id;
        if (!$this->Movement->exists()) {
            throw new NotFoundException(__('Invalid movement'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Movement->save($this->request->data)) {
                $this->Session->setFlash(__('The movement has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The movement could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Movement->read(null, $id);
        }
        $clients = $this->Movement->Client->find('list');
        $copies = $this->Movement->Copy->find('list');
        $this->set(compact('clients', 'copies'));
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Movement->id = $id;
        if (!$this->Movement->exists()) {
            throw new NotFoundException(__('Invalid movement'));
        }
        if ($this->Movement->delete()) {
            $this->Session->setFlash(__('Movement deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Movement was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * charge method
     * Adds a movement of type Money Charge.
     * @return void
     */
    public function charge() {
        if ($this->request->is('post')) {
            $this->Movement->create();
            if ($this->Movement->save($this->request->data)) {
                $this->Session->setFlash(__('The movement has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The movement could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Movement->Client->find('list');
        $copies = $this->Movement->Copy->find('list');
        $this->set(compact('clients', 'copies'));
    }

    /**
     * rent method
     * Adds a movement of type Movie Rental.
     * @return void
     */
    public function rent() {
        if ($this->request->is('post')) {
            $this->Movement->create();
            if ($this->Movement->save($this->request->data)) {
                $this->Session->setFlash(__('The movement has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The movement could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Movement->Client->find('list');
        $copies = $this->Movement->Copy->find('list');
        $this->set(compact('clients', 'copies'));
    }

    /**
     * retend method
     *
     * @param string $id
     * @return void
     */
    public function rentend($id = null) {
        $this->Movement->id = $id;
        if (!$this->Movement->exists()) {
            throw new NotFoundException(__('Invalid movement'));
        }
        $this->Movement->recursive=2;
        $this->Movement->read();
        if ('C'!=$this->Movement->data['Movement']['mov_type']) {
            $this->Session->setFlash(__('You only can return based on a rent movement'));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Movement->data['Movement']['returned']) {
            $this->Session->setFlash(__('You only can return once'));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Movement->save($this->request->data)) {
                $this->Session->setFlash(__('The movement has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The movement could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Movement->read(null, $id);
        }
        $clients = $this->Movement->Client->find('list');
        $copies = $this->Movement->Copy->find('list');
        $this->set(compact('clients', 'copies'));
    }

    /**
     * Shows the report form for the report
     * @return void
     */
    public function reportform() {
    }

    /**
     * Gets the parameters for a report
     *
     * @return void
     */
    public function report() {
        if(isset($this->data)):
            foreach($this->data as $k=>$v):
                foreach($v as $kk=>$vv):
                    if(''!=$vv):
                        $url[$k.'.'.$kk]=$vv;
                    endif;
                endforeach;
            endforeach;
            if (isset($this->data['Report']['minDate']) && isset($this->data['Report']['maxDate'])):
                $totOK=('' != $this->data['Report']['minDate']['year'])
                        && ('' != $this->data['Report']['minDate']['month'])
                        && ('' != $this->data['Report']['minDate']['day'])
                        && ('' != $this->data['Report']['maxDate']['year'])
                        && ('' != $this->data['Report']['maxDate']['month'])
                        && ('' != $this->data['Report']['maxDate']['day']);
            else:
                $totOK=false;
            endif;
            if($totOK):
                $url['action'] = 'reportview';
            else:
                $this->Session->setFlash(__('You must select complete dates'));
                $url['action'] = 'reportform';
            endif;
        endif;
        $this->redirect($url,null,true);
    }

    /**
     * Shows the report
     *
     * @return void
     */
    public function reportview() {
        $totOK=true;
        if (isset($this->passedArgs['Report.minDate']['day'])):
            $totOK=(''!=$this->passedArgs['Report.minDate']['day']);
        else:
            $totOK=false;
        endif;
        if (isset($this->passedArgs['Report.minDate']['month'])):
            $totOK=$totOK && (''!=$this->passedArgs['Report.minDate']['month']);
        else:
            $totOK=false;
        endif;
        if (isset($this->passedArgs['Report.minDate']["year"])):
            $totOK=$totOK && (''!=$this->passedArgs['Report.minDate']["year"]);
        else:
            $totOK=false;
        endif;
        if (isset($this->passedArgs['Report.maxDate']['day'])):
            $totOK=$totOK && (''!=$this->passedArgs['Report.maxDate']['day']);
        else:
            $totOK=false;
        endif;
        if (isset($this->passedArgs['Report.maxDate']['month'])):
            $totOK=$totOK && (''!=$this->passedArgs['Report.maxDate']['month']);
        else:
            $totOK=false;
        endif;
        if (isset($this->passedArgs['Report.maxDate']['year'])):
            $totOK=$totOK && (''!=$this->passedArgs['Report.maxDate']['year']);
        else:
            $totOK=false;
        endif;
        if(!$totOK):
            $this->Session->setFlash(__('You must select complete dates'));
            $url['action'] = 'reportform';
            $this->redirect($url,null,true);
        endif;
        $this->Movement->recursive = 2;
        $movements=$this->Movement->find('all',
                array(
                'conditions'=>array(
                        'Movement.ended >='=>date($this->passedArgs['Report.minDate']['year'].'-'.$this->passedArgs['Report.minDate']['month'].'-'.$this->passedArgs['Report.minDate']['day']),
                        'Movement.ended <='=>date($this->passedArgs['Report.maxDate']['year'].'-'.$this->passedArgs['Report.maxDate']['month'].'-'.$this->passedArgs['Report.maxDate']['day']),
                        'Movement.mov_type'=>'C',
                ),
                'order'=>array(
                        'Movement.ended',
                        'Movement.id'
                ),
        ));
        $this->set('movements',$movements);
    }
}
