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
class UsersController extends Controller {

    function __construct($action){
        $this->controller = 'users';
        $this->action = $action;
        parent::__construct('User');
        $this->$action();
        
    }
    function index(){
        if($this->check_login()){
            $result = $this->model->showAll();
            
        }

        
    }
    function add(){
        
    }
    /*
     * asda
     */
    function delete(){
        
    }
    
    function edit(){
        
    }
    function logout(){
        if(!empty($_SESSION['user_id'])){
            session_unset();
            session_destroy();
            setcookie(session_name('login'),'',time()-3600);
            echo "borrado";
        }else{
            echo "no session";
        }
        
    }
    function login(){
        
        $result = $this->model->auth($this->params['username'], $this->params['password']);
        
        if($result->num_rows == 1){
            
            
            while($row = mysqli_fetch_assoc($result)){

                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
            }
            echo "sesion";
        }
    }
}

?>
