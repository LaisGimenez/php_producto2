<?php 

class Register extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('welcomeuser/index');
    }
}
?>