<?php

namespace Dashboard\Core {
    class App
    {

        protected $controller = "Home";
        protected $method = "index";
        protected $params = [];

        /*
         * Construct Method
         *
         *
         *
         * */


        function __construct()
        {
            $arr = $this->UrlSanitize();

            //Sanitizing Controller
            if (file_exists(CONTROLLER_DIR . $arr[0] . ".php")) {
                $this->controller = $arr[0];
                unset($arr[0]);
            }
            require_once CONTROLLER_DIR . $this->controller . ".php";
            $this->controller = new $this->controller;
            //Sanitizing Action
            /*
             * Nếu có action trong controller -> gán giá trị vào $action
             * Sau đó loại bỏ giá trị trong url array
             * */
            if (isset($arr[1])) {
                if (method_exists($this->controller, $arr[1])) {
                    $this->method = $arr[1];
                    unset($arr[1]);
                }
            }
            /*
             *
             * */
            //Sanitizing Params
            $this->params = $arr ? array_values($arr) : [];
            print_r($arr);
            call_user_func_array([$this->controller, $this->method], $this->params);


        }

        function UrlSanitize()
        {


            //return URL PARAMS which contains Controller / Action / Params in an array
            if (isset($_GET["url"])) {
                $url_params = explode("/", filter_var(trim($_GET["url"]), FILTER_SANITIZE_URL));
                return $url_params;
            }


        }
    }
}

