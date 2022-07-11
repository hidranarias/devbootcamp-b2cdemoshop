<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @inheritDoc
 * @method HelloSprykerBusinessFactory getFactory()
 */

class HelloSprykerFacade extends AbstractFacade implements HelloSprykerFacadeInterface
{


    public function reverseString(string $stringToReverse): string
    {

      return $this->getFactory()->createStringReverser()->reverseString($stringToReverse);

    }
}
