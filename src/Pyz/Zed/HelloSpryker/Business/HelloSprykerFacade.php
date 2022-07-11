<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;

class HelloSprykerFacade extends AbstractFacade implements HelloSprykerFacadeInterface
{

    /**
     * @inheritDoc
     * @method HelloSprykerBusinessFactory getFactory()
     */
    public function reverseString(string $stringToReverse): string
    {

      return $this->getFactory()->createStringReverser()->reverseString($stringToReverse);

    }
}
