<?php 


class Len_of_string implements Validationinterface{

    public function validate($key, $value){
        if(strlen($value)  < 3 && !empty($value) && !is_numeric($value)){
            return "$key less than 3 chars.";
        }else {
            return false;
        }
    }

}