<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author ediardo
 */
class Database{
    protected $host;
    protected $user;
    protected $password;
    protected $db;
    protected $port;
    protected $driver;
    protected $con;
    protected $result;
    protected $err_no;
    protected $err_msg;
    protected $affected_rows;
    protected $num_rows;
    
    protected function __construct(){
        switch($this->driver){
            case 'mysqli':
                $this->con = new mysqli($this->host, $this->user, $this->password,  $this->db, $this->port);
                if(!$this->con){
                    $this->err_no = $this->con->connect_errno;
                    $this->err_msg = $this->con->connect_error;
                }
                break;
        }   
    }
    
    protected function execute($query){
        $this->result = $this->con->query($query);
        if(is_object($this->result)){
            $this->num_rows = $this->result->num_rows;
        }elseif($this->result){
            $this->affected_rows = $this->con->affected_rows;
            return true;
        }else{
            echo $this->con->connect_error;
            $this->err_no = $this->con->connect_errno;
            $this->err_msg = $this->con->connect_error;
            return false;
        }
    }
   
}

?>
