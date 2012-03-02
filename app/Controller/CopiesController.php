<?php
App::uses('AppController', 'Controller');
/**
 * Copies Controller
 *
 * @property Copy $Copy
 */
class CopiesController extends AppController {

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
        $this->Copy->recursive = 0;
        if(isset($this->passedArgs['Search.title'])):
            $searchedTitle = $this->passedArgs['Search.title'];
            $this->paginate['conditions'][]['Copy.title LIKE'] = "%$searchedTitle%";
        endif;
        if(isset($this->passedArgs['Search.id'])):
            $searchedId = $this->passedArgs['Search.id'];
            $this->paginate['conditions'][]['Copy.id'] = "$searchedId";
        endif;
        $this->set('copies', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Copy->id = $id;
        if (!$this->Copy->exists()) {
            throw new NotFoundException(__('Invalid copy'));
        }
        $this->set('copy', $this->Copy->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Copy->create();
            if ($this->Copy->save($this->request->data)) {
                $this->Session->setFlash(__('The copy has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The copy could not be saved. Please, try again.'));
            }
        }
        $formats = $this->Copy->Format->find('list');
        $this->set(compact('formats'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Copy->id = $id;
        if (!$this->Copy->exists()) {
            throw new NotFoundException(__('Invalid copy'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Copy->save($this->request->data)) {
                $this->Session->setFlash(__('The copy has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The copy could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Copy->read(null, $id);
        }
        $formats = $this->Copy->Format->find('list');
        $this->set(compact('formats'));
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
        $this->Copy->id = $id;
        if (!$this->Copy->exists()) {
            throw new NotFoundException(__('Invalid copy'));
        }
        if ($this->Copy->delete()) {
            $this->Session->setFlash(__('Copy deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Copy was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
