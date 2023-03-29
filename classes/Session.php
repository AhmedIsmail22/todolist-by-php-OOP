<?php 


class Session {

    public function __construct(){
        session_start();
    }

    public function set_session($key, $value){
        $_SESSION[$key] = $value;
    }

    public function get_session($key){
        return $_SESSION[$key];
    }

    public function isset_session($key){
        if(isset($_SESSION[$key])){
            return true;
        }else {
            return false;
        }
    }
    public function unset_session($key){
        unset($_SESSION[$key]);
    }
}