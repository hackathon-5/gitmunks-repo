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
        // TODO - Get users in their area they could help
        // TODO - Get questions they have outstanding
        $trips = $this->Trips->find('all')->contain(['Users', 'Comments']);
    }

    public function login(){

    }
}
