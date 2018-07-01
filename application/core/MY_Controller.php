<?php
class MY_Controller extends CI_Controller {
  public function __construct()
  {
      //Authorize Demo
      parent::__construct();
      if (!isset($_GET['sign'])) {
          show_error(401, 'UnAuthorized');
      }
  }
}
