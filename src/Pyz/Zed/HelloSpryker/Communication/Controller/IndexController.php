<?php

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Pyz\Zed\HelloSpryker\Business\HelloSprykerFacadeInterface;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method HelloSprykerFacadeInterface getFacade()
*/

class IndexController extends AbstractController
{

public function indexAction(Request $request)
{
   $dt = new HelloSprykerTransfer();
   $dt->setOriginalString('Hello Spryker');

    return [
     'string' => $this->getFacade()->reverseString($dt)->getReversedString()
    ];
}
}
