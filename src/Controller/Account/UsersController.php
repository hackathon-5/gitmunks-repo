<?php

namespace App\Controller\Account;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class UsersController extends \App\Controller\AppController{


    /**
     * Index of the user's account
     * here we show questions they have outstanding
     * or we show people they can help in their area
     */
    public function index(){
        $this->loadModel('Trips');

        $mytrips = $this->Trips->find('all')->where(['user_id'=>$this->Auth->user('id')])->contain(['Users', 'Comments']);

        $trips = $this->Trips->find('all')->where(['user_id !='=>$this->Auth->user('id')])->contain(['Users', 'Comments']);

        $this->set(compact('trips', 'mytrips'));
    }

    public function login(){
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl('/account/users/index'));
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
}
