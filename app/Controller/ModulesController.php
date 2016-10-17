<?php
App::uses('AppController', 'Controller');

class ModulesController extends AppController {
  public $components = array('Paginator', 'Flash', 'Session');
  public $uses=array('Course','Module','Scheme');

  public function index(){
    $datas=$this->Module->find('all',array(
      'order'=>array(
        'Module.name'
      ),
    ));
    $this->set(compact('datas'));
    $this->set('title','Modules');
  }

  public function add(){
    $this->Session->write('message_type',null);
    $this->Session->write('message',null);
    if($this->request->is(array('post','put'))){
        if($this->Module->save($this->request->data)){
            $this->Session->write('message_type','success');
            $this->Session->write('message','Module Created Successfully !');
            $this->redirect(array('action'=>'index'));
        }else{
          $this->Session->write('message_type','error');
          $this->Session->write('message','Module Creation Failed !');
        }
    }
      $this->set('title','Scheme');
      $eoptions=array('0'=>'In Active','1'=>'Active');
      $this->set('eoptions',$eoptions);
      $courses=$this->Course->find('list',array(
        'conditions'=>array(
          'Course.is_enable'=>1
        ),
        'order'=>array('name'),
      ));
      $this->set('courses',$courses);
      $schemes=$this->Scheme->find('list',array(
          'order'=>array('name'),
      ));
      $this->set('schemes',$schemes);
  }

  public function edit($id){
    $this->Session->write('message_type',null);
    $this->Session->write('message',null);
    if($this->request->is(array('post','put'))){
        if($this->Module->save($this->request->data)){
            $this->Session->write('message_type','success');
            $this->Session->write('message','Module Modified Successfully !');
            $this->redirect(array('action'=>'index'));
        }else{
          $this->Session->write('message_type','error');
          $this->Session->write('message','Module Modification Failed !');
        }
    }
      $this->set('title','Users');
      $eoptions=array('0'=>'In Active','1'=>'Active');
      $this->set('eoptions',$eoptions);
      $this->request->data=$this->Module->findById($id);
      $courses=$this->Course->find('list',array(
        'conditions'=>array(
          'Course.is_enable'=>1
        ),
        'order'=>array('name'),
      ));
      $this->set('courses',$courses);
      $schemes=$this->Scheme->find('list',array(
          'order'=>array('name'),
      ));
      $this->set('schemes',$schemes);
  }

  public function delete($id){
    $this->Module->delete($id);
    $this->Session->write('message_type','success');
    $this->Session->write('message','Module Deleted Successfully !');
    $this->redirect(array('action'=>'index'));
  }

}
