<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {
  public $components = array('Paginator', 'Flash', 'Session');

  public function index(){
  //  $this->Session->write('message_type',null);
  //  $this->Session->write('message',null);
    $datas=$this->User->find('all',array(
      'order'=>array(
        'name'
      ),
    ));
    $this->set(compact('datas'));
    $this->set('title','Users');
  }

  public function add(){
    $this->Session->write('message_type',null);
    $this->Session->write('message',null);
    if($this->request->is(array('post','put'))){
        if($this->User->save($this->request->data)){
            $this->Session->write('message_type','success');
            $this->Session->write('message','User Created Successfully !');
            $this->redirect(array('action'=>'index'));
        }else{
          $this->Session->write('message_type','error');
          $this->Session->write('message','User Creation Failed !');
        }
    }
      $this->set('title','Users');
      $eoptions=array('0'=>'In Active','1'=>'Active');
      $this->set('eoptions',$eoptions);
  }

  public function edit($id){
    $this->Session->write('message_type',null);
    $this->Session->write('message',null);
    if($this->request->is(array('post','put'))){
        if($this->User->save($this->request->data)){
            $this->Session->write('message_type','success');
            $this->Session->write('message','User Modified Successfully !');
            $this->redirect(array('action'=>'index'));
        }else{
          $this->Session->write('message_type','error');
          $this->Session->write('message','User Modification Failed !');
        }
    }
      $this->set('title','Users');
      $eoptions=array('0'=>'In Active','1'=>'Active');
      $this->set('eoptions',$eoptions);
      $this->request->data=$this->User->findById($id);
  }

  public function delete($id){
    $this->User->delete($id);
    $this->Session->write('message_type','success');
    $this->Session->write('message','User Deleted Successfully !');
    $this->redirect(array('action'=>'index'));
  }

}
