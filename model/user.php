<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of comment
 *
 * @author ediardo
 */
class User extends Model {
    //put your code here
    protected $user_id;
    protected $username;
    protected $password;
    protected $email;
    protected $status;
    protected $created;
    protected $modified;
    

    function __construct(){
        parent::__construct('User','users');
    }
    
    function test(){
        echo "joto";
    }
    function auth($username, $password){
        $this->execute("SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1");
        return $this->result;
        
    }

}

?>
