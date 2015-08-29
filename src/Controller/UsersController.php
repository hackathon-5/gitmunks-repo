<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class UsersController extends AppController{

    public function beforeFilter(\Cake\Event\Event $event){
        parent::beforeFilter($event);
        $this->Auth->allow(['register']);
    }


    public function register(){
        if($this->request->is('post')){
            $user = $this->Users->newEntity();
            $data = ['firstname'=>$this->request->data['name'], 'role'=>'user'] + $this->request->data;
            $user = $this->Users->patchEntity($user, $data);
            $this->Users->save($user);
            $this->Auth->setUser($user->toArray());
            exit;
        }
    }
}
