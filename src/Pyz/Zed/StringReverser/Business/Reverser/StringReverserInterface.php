<?php
namespace Pyz\Zed\StringReverser\Business\Reverser;



use Generated\Shared\Transfer\HelloSprykerTransfer;

interface StringReverserInterface

{
    /**
     * @param string $stringToReverse
     *
     * @return string
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;

}