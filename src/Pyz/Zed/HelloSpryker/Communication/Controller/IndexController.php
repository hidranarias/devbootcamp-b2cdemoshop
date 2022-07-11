<?php

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
public function indexAction(Request $request)
{
    $string = $request->get('string', 'Hello Spryker');
    return [
     'string' => $this->getFacade()->reverseString($string)];
}
}
