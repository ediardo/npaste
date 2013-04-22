<?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', getcwd());
    define('APP_ROOT',ROOT.DS.'..');
    define('APP_CONTROLLERS', APP_ROOT.DS.'controller');
    define('APP_MODELS', APP_ROOT.DS.'model');
    define('APP_VIEWS', APP_ROOT.DS.'view');
    include(APP_ROOT.DS.'lib'.DS.'controller.php');
    include(APP_ROOT.DS.'lib'.DS.'database.php');
    include(APP_ROOT.DS.'lib'.DS.'model.php');
    
    $controller = $_GET['controller'];
    $action = $_GET['action'];
    switch($controller){
        case 'users':
            include(APP_CONTROLLERS.DS.$controller.'_controller.php');
            $User = new UsersController($action);
            break;
        case 'pastes':
            include(APP_CONTROLLERS.DS.$controller.'_controller.php');
            break;
        case 'comments':
            include(APP_CONTROLLERS.DS.$controller.'_controller.php');
            
            $Comment = new CommentsController($action);
            break;
        
        
    }

?>