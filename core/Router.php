<?php

class Router
{
    public function __construct($routes)
    {
        $this->load($_SERVER['REQUEST_URI'], $routes);
    }

    protected function load($request, $routes)
    {
        $getParamPos = strpos($request, '?');
        if ($getParamPos != null) $link = substr($request, 0, $getParamPos);
        else $link = $request;
        if (!array_key_exists($link, $routes)) require "views/404.php";
        else foreach ($routes as $route => $path) {
            switch ($link) {
                case "{$route}":
                    require "{$path}";
                    break;
            }
        }
    }
}