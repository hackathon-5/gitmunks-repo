<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class TripsController extends AppController{
    function add(){
        if($this->request->is('post')){
            $trip = $this->Trips->newEntity();
            $trip = $this->Trips->patchEntity($trip, $this->request->data);
            $this->Trips->save($trip);
        }
    }
}