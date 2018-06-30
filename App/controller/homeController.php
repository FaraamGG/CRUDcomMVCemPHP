<?php
namespace App\Controller;
class homeController {
    
    protected $view;
    
    public function render($view, $template) {
        $this->view = 'App//view//index//' . $view;
        include 'App//view//' . $template;
    }
    
    public function content() {
        include $this->view;
    }
    
    public function index() {
        $this->render('index.php','template.php');
    }
 //   public function lista() {
 //       echo "LISTA";
 //   }
    public function conteudo() {
     echo "CONTEUDO";
   }
}
