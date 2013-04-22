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
class Comment extends Model {
    //put your code here
    protected $comment_id;
    protected $user_id;
    protected $paste_id;
    protected $author_name;
    protected $comment;
    protected $status;
    protected $created;
    protected $modified;
    

    function __construct(){
        parent::__construct('Comment','comments');
    }

}

?>
