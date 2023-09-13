<?php

namespace ChdTask;
class App
{
    private $dependency;

    public function __construct(ExampleService $dependency)
    {
        $this->dependency = $dependency;
    }

    public function runApp()
    {
        $this->dependency->doSomething();
    }
}

