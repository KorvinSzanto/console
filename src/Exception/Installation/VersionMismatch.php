<?php

namespace Concrete\Console\Exception\Installation;

class VersionMismatch extends \InvalidArgumentException
{

    public static function expected(string $expected, string $got): VersionMismatch
    {
        return new self("Expected {$expected}, got {$got}");
    }
}
