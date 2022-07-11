<?php

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

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

    $string = $request->get('string', 'Hello Spryker');
    return [
     'string' => $this->getFacade()->reverseString($string)];
}
}
