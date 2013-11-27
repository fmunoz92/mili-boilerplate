<?php

class HomeController extends BaseController {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->return_html("index.tpl");
    }

}

?>