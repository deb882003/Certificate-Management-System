<?php
App::uses('AppController', 'Controller');

class CoursesController extends AppController {
  public $components = array('Paginator', 'Flash', 'Session');

  public function index(){
    $datas=$this->Course->find('all',array(
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
        if($this->Course->save($this->request->data)){
            $this->Session->write('message_type','success');
            $this->Session->write('message','Course Created Successfully !');
            $this->redirect(array('action'=>'index'));
        }else{
          $this->Session->write('message_type','error');
          $this->Session->write('message','Course Creation Failed !');
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
        if($this->Course->save($this->request->data)){
            $this->Session->write('message_type','success');
            $this->Session->write('message','Course Modified Successfully !');
            $this->redirect(array('action'=>'index'));
        }else{
          $this->Session->write('message_type','error');
          $this->Session->write('message','Course Modification Failed !');
        }
    }
      $this->set('title','Users');
      $eoptions=array('0'=>'In Active','1'=>'Active');
      $this->set('eoptions',$eoptions);
      $this->request->data=$this->Course->findById($id);
  }

  public function delete($id){
    $this->Course->delete($id);
    $this->Session->write('message_type','success');
    $this->Session->write('message','Course Deleted Successfully !');
    $this->redirect(array('action'=>'index'));
  }

}
