<?php 


class Str implements Validationinterface{

    public function validate($key, $value){
        if(is_numeric($value)){
            return "$key must be String.";
        }else {
            return false;
        }
    }

}