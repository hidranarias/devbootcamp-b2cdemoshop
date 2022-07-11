<?php

namespace Pyz\Zed;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
public function indexAction(Request $request)
{
 return ['string' => $request->get('string', 'Hello Spryker')];
}
}
