<?php
namespace Index;

class Index
{
    public function index($a,$b)
    {
        echo 'index';
        if($a+$b >= 10){
            return true;
        }else{
            return false;
        }
    }

    public function test()
    {
        var_dump('test');
        return true;
    }
}
