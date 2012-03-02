<?php
App::uses('AppController', 'Controller');
/**
 * Formats Controller
 *
 * @property Format $Format
 */
class FormatsController extends AppController {
    public $components = array(
            'Session',
            'Auth');
    /**
     * Helpers
     *
     * @var array
     */
//	public $helpers = array('Ajax', 'Javascript');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Format->recursive = 0;
        $this->set('formats', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Format->id = $id;
        if (!$this->Format->exists()) {
            throw new NotFoundException(__('Invalid format'));
        }
        $this->set('format', $this->Format->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Format->create();
            if ($this->Format->save($this->request->data)) {
                $this->Session->setFlash(__('The format has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The format could not be saved. Please, try again.'));
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
        $this->Format->id = $id;
        if (!$this->Format->exists()) {
            throw new NotFoundException(__('Invalid format'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Format->save($this->request->data)) {
                $this->Session->setFlash(__('The format has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The format could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Format->read(null, $id);
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
        $this->Format->id = $id;
        if (!$this->Format->exists()) {
            throw new NotFoundException(__('Invalid format'));
        }
        if ($this->Format->delete()) {
            $this->Session->setFlash(__('Format deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Format was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
