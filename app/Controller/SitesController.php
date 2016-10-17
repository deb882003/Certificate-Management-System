<?php
App::uses('AppController', 'Controller');

class SitesController extends AppController {
  public $components = array('Paginator', 'Flash', 'Session');
  
  public function index(){
    $this->set('title','Dashboard');
  }
}
