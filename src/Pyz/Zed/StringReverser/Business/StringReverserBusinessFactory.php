<?php

namespace Pyz\Zed\StringReverser\Business;

use Pyz\Zed\StringReverser\Business\Reverser\StringReverser;
use Pyz\Zed\StringReverser\Business\Reverser\StringReverserInterface;

class StringReverserBusinessFactory
{
    /**
    +     * @return \Pyz\Zed\HelloSpryker\Business\Reader\StringReaderInterface
    +     */
    public function createStringReverser(): StringReverserInterface
    {
        return new StringReverser();
    }
}
