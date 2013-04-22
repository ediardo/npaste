<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model
 *
 * @author ediardo
 */
class Model extends Database{
    //put your code here
    
    protected $model;
    protected $table;
    
    function __construct($model, $table){
        $this->model = $model;
        $this->table = $table;
        $this->host = 'localhost';
        $this->user = 'cc409_autosiiau';
        $this->password = 'AxI2rKBC4m';
        $this->db = 'cc409_autosiiau';
        $this->port = 3306;
        $this->driver = 'mysqli';
        parent::__construct();
    }
    
    protected function showAll(){
        $this->execute("SELECT * FROM $this->table");
    }
    
    function deleteById($id){
        
    }
    function searchById($id){
        
    }
    function save($data){
        
    }
    
    
    
}

?>
