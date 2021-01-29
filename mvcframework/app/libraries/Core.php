<?php
    // Core App class
    class Core 
    {
        protected $currentController = 'Pages';
        protected $currentNethod = 'index';
        protected $params = [];

        public function __construct()
        {
            print_r($this->getUrl());
        }

        public function getUrl() {
            if (isset($_GET['url'])) {
                $url = rtrim($_GET['url'],'/'); // get rid off the last /
                // allows you to filter variables as string/number
                $url = filter_var($url, FILTER_SANITIZE_URL);
                // breaking it into an array
                $url = explode('/', $url);
                return $url;
            }
        }

    }
