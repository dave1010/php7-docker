<?php

function foo()
{
    return function()
    {
        return 1;
    }
}

var_dump(foo()());

