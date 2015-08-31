<?php

namespace Helloworld\Model;

class Hi {
    
    function sayHello($name=null)
    {
        if(isset($name))
        {
            return 'Hello '.$name;
        }else{
            return 'Hello World!';
        }
        
    }
}
