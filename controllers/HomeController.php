<?php

include("./libs/Controller.php");

abstract class HomeController extends Controller{

    public static function index() {

        static::setTemplate();

        static::$body = file_get_contents('./views/home.html');
        static::$title = "Home";

        static::$template = str_replace("{{title}}", static::$title, static::$template);
        static::$template = str_replace("{{body}}", static::$body, static::$template);

        echo static::$template;
    }
}

?>