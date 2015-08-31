<?php

namespace Himumbai\Model;


class Hi {
   
    function sayHi($name)
    {
        if(isset($name))
        {
            return 'Hi Mumbai with Jituraj!';
        }else
        {
            return 'Hi Mumbai';
        }
    }
}
