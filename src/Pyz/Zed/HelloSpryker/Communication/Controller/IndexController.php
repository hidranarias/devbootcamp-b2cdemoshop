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
    $originalString = $request->get('string', 'Hello Spryker');
    $dt->setOriginalString($originalString);
    $dt = $this->getFacade()->reverseString($dt);
    $dt->setOriginalString($originalString);

           // Create new row in DB.
           $dt = $this->getFacade()->createHelloSprykerEntity($dt);

           // Retrieve data from DB.
           $dt = $this->getFacade()->findHelloSpryker($dt);

    return [
     'string' => $dt->getReversedString()
    ];
}
}
