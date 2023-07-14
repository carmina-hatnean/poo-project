<?php

namespace TheCodeholic;
const MY_CONST=1;
class User
{

    public function __construct()
    {
        echo "Global NS";
    }

    public function hello()
    {
        echo "Hello!";
    }

}