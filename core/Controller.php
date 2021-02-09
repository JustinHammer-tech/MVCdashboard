<?php

namespace Dashboard\Core;
class Controller
{
    public function model($model){
        require_once MODEL_DIR . $model. "Model" . PHP_EXTENSION;

        $_model = $model."Model";

        return new $_model;
    }

    public function view($controller , $method , $data = null){
        if(file_exists(VIEW_DIR . $controller . "/" . $method . PHP_EXTENSION)){
            require_once VIEW_DIR . $controller . "/" . $method . PHP_EXTENSION;
        }
    }

    public function view_404(){
        require_once PAGE_404;
    }
}
