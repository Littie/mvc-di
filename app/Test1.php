<?php

declare(strict_types = 1);


namespace App;


class Test1
{
    protected $test2;

    public function __construct()
    {
//        $this->test2 = $test2;
    }

    public function getTest2()
    {
        return 'Hello';
    }
}
