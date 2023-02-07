<?php

namespace App\Exceptions;

use Exception;

class MyException extends Exception{

    function report(){}

    function render(){
        return 'Sth went wrong';
    }

}
