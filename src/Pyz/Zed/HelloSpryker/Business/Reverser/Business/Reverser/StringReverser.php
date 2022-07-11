<?php

namespace Pyz\Zed\HelloSpryker\Business\Reverser\Business\Reverser;

use Pyz\Zed\HelloSpryker\Business\Reverser\StringReverserInterface;

class StringReverser implements StringReverserInterface
{

    /**
     * @inheritDoc
     */
    public function reverseString(string $stringToReverse): string
    {
        return strrev($stringToReverse);
    }
}
