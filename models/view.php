<?php
namespace models;
class view{
  public $layout;
    public function render($view){
      $viewPath = \webapp::$app->root."/views/site/".$view.".php";
      $this->layout = \webapp::$app->root."\\views\\layouts\\main.php";
      ob_start();                      // start capturing output
      include($viewPath);   // execute the file
      $content = ob_get_contents();    // get the contents from the buffer
      ob_end_clean();
      ob_start();
      include ($this->layout);
      ob_end_flush();
    }
}
?>
