<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PastesController
 *
 * @author ediardo
 * 
 */
class CommentsController extends Controller {
    //put your code here
    
    
    function __construct($action){
        
        $this->controller = 'comments';
        $this->action = $action;
        parent::__construct('Comment');
        $this->{$this->action}();
    }
    /*
     * Muestra el listado de pastes
     * @
     */
    function index(){
        if($this->check_login()){
            echo "si estas logeado";
            echo "el significado de la vida es 42";
        }else{
            echo "no estas logeado y no puedes ver nada";
        }        
    }
    function add(){
        
    }
    
    function delete(){
        
    }
    
    function edit(){
        
    }
}

?>
