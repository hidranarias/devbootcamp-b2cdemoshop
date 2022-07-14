<?php

namespace Pyz\Zed\Application\Communication\Controller;

use Spryker\Glue\Kernel\Controller\AbstractController;
use Spryker\Zed\Application\Communication\Controller\IndexController as SprykerIndexController;

class IndexController extends SprykerIndexController
{
    /**
     * @return string
     */
    public function indexAction(): string
    {
        return  'Hello DE Store!';
    }
}
