<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Pyz\Zed\HelloSpryker\Business\Reverser\StringReverser;
use Pyz\Zed\HelloSpryker\Business\Reverser\StringReverserInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;


class HelloSprykerBusinessFactory extends AbstractBusinessFactory
{
public function createStringReverser():StringReverserInterface {
 return new StringReverser();
}
}
