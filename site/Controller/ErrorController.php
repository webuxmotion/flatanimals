<?php

namespace Site\Controller;

class ErrorController extends SiteController {

  public function indexAction() {
    $this->view->render('page404');
  }
}

?>
