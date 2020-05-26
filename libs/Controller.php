<?php

abstract class Controller {
    protected static $template;
    protected static $title;
    protected static $body;

    static protected function setTemplate() {
        static::$template = file_get_contents('./public/layouts/template.html');
    }
}

?>