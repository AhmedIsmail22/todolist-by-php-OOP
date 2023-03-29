<?php 



class Validation{
    private $errors = [];
        public function validate($key, $value, $rules){
            foreach($rules as $rule){
                $obj = new $rule;
                    $error = $obj->validate($key, $value);
                    if($error){
                        $this->errors[] = $error;
                    }
            }
        }

        public function get_errors(){
            return $this->errors;
        }
}