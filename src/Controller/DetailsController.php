<?php

namespace App\Controller;

use App\Controller\AppController;


class DetailsController extends AppController
{
    public function index()
    {
        $details= $this->Details->find('all');
       // print_r($details);

        $this->set(compact('details'));
    }

    public function addx()
    {
        $detail=$this->Details->newEntity();
        if ($this->request->is('detail')){
            $detail = $this->Details->patchEntity($detail, $this->request->getData());
            if ($this->Details->save($detail)) {
                $this->Flash->success('The post has been saved.',['key'=>'message']);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }

        $this->set('detail',$detail);
    }
}
?>