<?php

namespace Pyz\Zed\HelloSpryker\Business\Reverser;



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
