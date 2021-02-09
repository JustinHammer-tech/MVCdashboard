<?php

namespace Dashboard\Core;
class Controller
{
    public function model($model){
        require_once MODEL_DIR . $model. "Model" . PHP_EXTENSION;

        $_model = $model."Model";

        return new $_model;
    }

    public function view($view){

    }
}
