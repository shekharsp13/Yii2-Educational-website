<?php declare(strict_types=1);

namespace DeepCopy\f008;

class A
{
    private $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function getFoo()
    {
        return $this->foo;
    }
}
