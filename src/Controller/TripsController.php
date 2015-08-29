<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class TripsController extends AppController{
    /**
     * Add a trip
     * TODO - add validation of save.
     */
    function add(){
        if($this->request->is('post')){
            $trip = $this->Trips->newEntity();
            $data = ['user_id'=>$this->Auth->user('id')] + $this->request->data;
            $trip = $this->Trips->patchEntity($trip, $data);
            $this->Trips->save($trip);
        }
    }

    /**
     * @param $id
     * View a single trip
     * TODO - refactor how "rated" is determined for a user
     */
    function view($id){
        $trip = $this->Trips->find()->where(['Trips.id'=>$id])->contain(['Comments.Users', 'Comments.Ratings', 'Users'])->first();
        foreach($trip->comments as &$comment){
            $comment->rated = false;
            foreach($comment->ratings as $rating){
                if($this->Auth->user('id') == $rating->rater_id){
                    $comment->rated = true;
                    break;
                }
            }
        }
        $this->set(compact('trip'));
    }
}