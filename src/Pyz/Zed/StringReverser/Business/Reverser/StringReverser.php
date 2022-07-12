<?php

namespace Pyz\Zed\StringReverser\Business\Reverser;



use Generated\Shared\Transfer\HelloSprykerTransfer;

class StringReverser implements StringReverserInterface
{

    /**
     * @inheritDoc
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        $str = strrev($helloSprykerTransfer->getOriginalString());
        $helloSprykerTransfer->setReversedString($str);
        return $helloSprykerTransfer;
    }
}
