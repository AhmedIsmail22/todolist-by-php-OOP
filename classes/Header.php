<?php 



class Header{
    public function go_to($key){
        return header("location:$key");
    }
}