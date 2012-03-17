<?php
class uploadifyWidget extends CInputWidget {
    protected $mult;

    public function run() {
        $controller=$this->controller;
        $action=$controller->action;
        $this->render('uploadifyWidget',array('mult'=>$this->mult));
    }
}