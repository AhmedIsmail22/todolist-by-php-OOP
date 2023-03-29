<?php


class Requests {
    public function get($key){
        return (isset($_GET[$key]))?$_GET[$key] : null;
    }

    public function post($key){
        return (isset($_POST[$key]))?$_POST[$key] : null;
    }

    public function hasGet($key){
        return isset($key);
    }

    public function hasPost($key){
        return isset($key);
    }

    public function clean($key){
        return trim(htmlspecialchars($key));
    }

    public function check(){
        return $_SERVER['REQUEST_METHOD'];
    }
}