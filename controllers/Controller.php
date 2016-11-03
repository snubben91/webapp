<?php
namespace controllers;
use models\view;
class Controller{
  public function actionContact(){
    $this->render('contact');
  }
  public function actionHome(){
    $this->render('home');
  }
  public function actionCompany(){
    $this->render('company');
  }


  public function render($path){
    $view = new view();
    $view->render($path);
  }
}
?>
