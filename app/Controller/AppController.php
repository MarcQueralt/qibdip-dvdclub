<?php
// app/Controller/AppController.php
class AppController extends Controller {
    public $components = array(
            'Session',
            'Auth' => array(
                            'loginRedirect' => array('controller' => 'copies', 'action' => 'index'),
                            'logoutRedirect' => array('controller' => 'users', 'action' => 'loggedout'),
                            'authorize' => array('Controller') // Added this line
            )
    );

//    public function beforeFilter() {
//        $this->Auth->allow('index', 'view');
//    }

    public function isAuthorized($user) {
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true; //Admin can access every action
    }
    return false; // The rest don't
}
}
?>