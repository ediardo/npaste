<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author ediardo
 */
class Controller {
    protected $controller;
    protected $model;
    protected $view;
    protected $params;
    
    function __construct($model){
        session_start();
        include_once(APP_MODELS.DS.strtolower($model).'.php');
        $this->model = new $model();
        
        foreach($_GET as $param => $value){
            $this->params[$param] = $value;
        }
    }
    
    function check_login(){
       if(!empty($_SESSION['user_id'])){
            return true;
        }else{
            return false;
        }
    }
    
}

?>
