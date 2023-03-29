<?php 


class Required implements Validationinterface{

    public function validate($key, $value){
        if(empty($value)){
            return "$key is required";
        }else {
            return false;
        }
    }

}