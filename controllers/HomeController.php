<?php 
    class HomeController extends Controller
    {
      public function __construct()
      {
          $params = array('nombre' => 'Gian');
          $this->render(__CLASS__, $params);
      }  

      public function exec()
      {
          echo '<h1>Hola Controller</h1>';
      }
    }
?>