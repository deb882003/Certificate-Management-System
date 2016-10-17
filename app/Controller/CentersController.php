<?php
App::uses('AppController', 'Controller');

class CentersController extends AppController {
  public $components = array('Paginator', 'Flash', 'Session');

  public function index(){
    $datas=$this->Center->find('all',array(
      'order'=>array(
        'name'
      ),
    ));
    $this->set(compact('datas'));
    $this->set('title','Centers');
  }

  public function add(){
    $this->Session->write('message_type',null);
    $this->Session->write('message',null);
    if($this->request->is(array('post','put'))){
        if($this->Center->save($this->request->data)){
            $this->Session->write('message_type','success');
            $this->Session->write('message','Centre Created Successfully !');
            $this->redirect(array('action'=>'index'));
        }else{
          $this->Session->write('message_type','error');
          $this->Session->write('message','Centre Creation Failed !');
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
        if($this->Center->save($this->request->data)){
            $this->Session->write('message_type','success');
            $this->Session->write('message','Centre Modified Successfully !');
            $this->redirect(array('action'=>'index'));
        }else{
          $this->Session->write('message_type','error');
          $this->Session->write('message','Centre Modification Failed !');
        }
    }
      $this->set('title','Users');
      $eoptions=array('0'=>'In Active','1'=>'Active');
      $this->set('eoptions',$eoptions);
      $this->request->data=$this->Center->findById($id);
    
  }

  public function delete($id){
    $this->Center->delete($id);
    $this->Session->write('message_type','success');
    $this->Session->write('message','Center Deleted Successfully !');
    $this->redirect(array('action'=>'index'));
  }

}
