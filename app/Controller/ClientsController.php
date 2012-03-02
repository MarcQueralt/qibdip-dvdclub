<?php
App::uses('AppController', 'Controller');
/**
 * Clients Controller
 *
 * @property Client $Client
 */
class ClientsController extends AppController {

    public $paginate = array();
    public $components = array(
            'Session',
            'Auth');

    function search() {
        // the page will redirect to
        $url['action'] = 'index';
        // build a URL with all the Search elements in it
        if(isset($this->data)):
            foreach($this->data as $k=>$v):
                foreach($v as $kk=>$vv):
                    if(''!=$vv):
                        $url[$k.'.'.$kk]=$vv;
                    endif;
                endforeach;
            endforeach;
        endif;
        $this->redirect($url,null,true);
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Client->recursive = 0;
        //$this->set('clients', $this->paginate());
        if(isset($this->passedArgs['Search.fullname'])):
            $searchedFullName = $this->passedArgs['Search.fullname'];
            $this->paginate['conditions'][]['Client.fullname LIKE'] = "%$searchedFullName%";
        endif;
        if(isset($this->passedArgs['Search.id'])):
            $searchedId = $this->passedArgs['Search.id'];
            $this->paginate['conditions'][]['Client.id'] = "$searchedId";
        endif;

        $this->set('clients',$this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Client->id = $id;
        if (!$this->Client->exists()) {
            throw new NotFoundException(__('Invalid client'));
        }
        $this->set('client', $this->Client->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Client->create();
            if ($this->Client->save($this->request->data)) {
                $this->Session->setFlash(__('The client has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The client could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Client->id = $id;
        if (!$this->Client->exists()) {
            throw new NotFoundException(__('Invalid client'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Client->save($this->request->data)) {
                $this->Session->setFlash(__('The client has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The client could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Client->read(null, $id);
        }
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
        $this->Client->id = $id;
        if (!$this->Client->exists()) {
            throw new NotFoundException(__('Invalid client'));
        }
        if ($this->Client->delete()) {
            $this->Session->setFlash(__('Client deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Client was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
?>