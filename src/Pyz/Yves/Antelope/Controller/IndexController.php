<?php

namespace Pyz\Yves\Antelope\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;

/**
 * @method \Pyz\Client\Antelope\AntelopeClientInterface getClient()
 */
class IndexController extends AbstractController
{
    /**
     * @param string $name
     *
     * @return \Spryker\Yves\Kernel\View\View
     */
    public function indexAction(string $name)
    {
        $antelope = $this->getClient()->getAntelopeByName($name);
        $currentStore = $this->getFactory()
            ->getStoreClient()
            ->getCurrentStore();
        return $this->view(
            [
                'antelope' => $antelope,
                'store' => $currentStore
            ],
            [],
            '@Antelope/views/index/index.twig'
        );
    }
}


