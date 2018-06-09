<?php

namespace TESTRESET;
use AltoRouter;

class Application {

    private $router;

    public function __construct(){
            $config = parse_ini_file(__DIR__ . '/config.conf');
            $this->router = new AltoRouter();
            $this->router->setBasePath($config['BASE_PATH']);
            $this->defineRoutes();
    }

    public function defineRoutes(){
        $this->router->map('GET','/','MainController#home','main_home');
    }

    public function run(){

        $match = $this->router->match();

        if ($match != false){

            $dispatcherInfos = $match['target'];
            $controllerandMethod = explode('#',$dispatcherInfos);
            $controllerName = $controllerandMethod[0];
            $methodName = $controllerandMethod[1];
            $controllerName = 'TESTRESET\Controllers\\'.$controllerName;
            $controller = new $controllerName($this);
            $controller->$methodName($match['params']);

        }
        else{
            \TESTRESET\Controllers\CoreController::sendHttpError(404, 'Sonia - 404');
        }
    }

    public function getRouter() : AltoRouter {
        return $this->router;
    }

}
