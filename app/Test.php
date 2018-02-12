<?php

declare(strict_types = 1);

namespace App;

class Test
{
    protected $test1;

    public function __construct(Test1 $test1)
    {
        $this->test1= $test1;
    }

    public function getTest1()
    {
        return $this->test1->getTest2();
    }
}
