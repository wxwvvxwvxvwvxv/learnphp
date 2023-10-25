<?php
namespace App;
class Router{
    static $routes =[];
    private $path;
    private $method;
     public function __construct($path, $method){
        $this->path = parse_url($path, PHP_URL_PATH);
        $this-> method = $method;
     }
    public function match(){
        foreach(self::$routes as $route){
            if($route['path']=== $this->path && $route['method'] === $this->method){
                return $route;
            }
        }
        return false;
    }

    public static function addRoutes($method, $path, $action){
        self::$routes[] = [
            'method' => $method,
            'path' => $path, 
            'action' =>$action
        ];
    }
    public static function get($path, $action){
        self::addRoutes('GET', $path, $action);
    }

    public static function post($path, $action){
        self::addRoutes('POST', $path, $action);
    }

}