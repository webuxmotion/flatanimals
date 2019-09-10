<?php

namespace Site\Controller;

class LotteryController extends SiteController {

  public function show() {
    $this->view->render('lottery');
  }
}

?>
