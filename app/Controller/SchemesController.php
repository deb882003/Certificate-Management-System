<?php
App::uses('AppController', 'Controller');

class SchemesController extends AppController {
  public $components = array('Paginator', 'Flash', 'Session');

  public function index(){
    $datas=$this->Scheme->find('all',array(
      'order'=>array(
        'name'
      ),
    ));
    $this->set(compact('datas'));
    $this->set('title','Schemes');
  }

  public function add(){
    $this->Session->write('message_type',null);
    $this->Session->write('message',null);
    if($this->request->is(array('post','put'))){
        if($this->Scheme->save($this->request->data)){
            $this->Session->write('message_type','success');
            $this->Session->write('message','Scheme Created Successfully !');
            $this->redirect(array('action'=>'index'));
        }else{
          $this->Session->write('message_type','error');
          $this->Session->write('message','Scheme Creation Failed !');
        }
    }
      $this->set('title','Scheme');
      $eoptions=array('0'=>'In Active','1'=>'Active');
      $this->set('eoptions',$eoptions);
  }

  public function edit($id){
    $this->Session->write('message_type',null);
    $this->Session->write('message',null);
    if($this->request->is(array('post','put'))){
        if($this->Scheme->save($this->request->data)){
            $this->Session->write('message_type','success');
            $this->Session->write('message','Scheme Modified Successfully !');
            $this->redirect(array('action'=>'index'));
        }else{
          $this->Session->write('message_type','error');
          $this->Session->write('message','Scheme Modification Failed !');
        }
    }
      $this->set('title','Users');
      $eoptions=array('0'=>'In Active','1'=>'Active');
      $this->set('eoptions',$eoptions);
      $this->request->data=$this->Scheme->findById($id);
  }

  public function delete($id){
    $this->Scheme->delete($id);
    $this->Session->write('message_type','success');
    $this->Session->write('message','Scheme Deleted Successfully !');
    $this->redirect(array('action'=>'index'));
  }

}
