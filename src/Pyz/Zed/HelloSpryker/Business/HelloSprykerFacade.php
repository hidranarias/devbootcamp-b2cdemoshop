<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @inheritDoc
 * @method HelloSprykerBusinessFactory getFactory()
 */

class HelloSprykerFacade extends AbstractFacade implements HelloSprykerFacadeInterface
{


    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {

      return $this->getFactory()->createStringReverser()->reverseString($helloSprykerTransfer);

    }
}
