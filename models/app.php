<?php
namespace models;
class app{
  public $root;
  public $request;
  public $server;
  public $controller;
  public $actionid;

  public function __construct(){
    if(self::preinit() && self::init()){
      \webapp::$app = $this;
      self::run();
    }
    else{
      echo 'failed to run';
    }
  }
  public function preinit(){
    $result = true;

    return $result;
  }
  public function init(){
    $result = false;
    $this->root = dirname(__DIR__);

    $this->request = $_SERVER['REQUEST_URI'];

    $result = true;
    return $result;
  }
  public function run(){
    $this->handleRequest($this->getRequest());
  }

  public function handleRequest($url){
    $actionId = "action".ucwords(substr($url, strpos($url, '/')+1, strlen($url)));
    if($actionId == 'action'){
      $actionId = 'actionHome';
    }
    $controllerPath = '\\controllers\\Controller';
    $controller = new $controllerPath();
    $controller->$actionId();
  }
  public function getRequest(){
    return $this->request;
  }
}
?>
