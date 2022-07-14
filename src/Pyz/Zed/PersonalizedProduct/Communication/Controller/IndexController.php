<?php

namespace Pyz\Zed\PersonalizedProduct\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

/**
 * @method \Pyz\Zed\PersonalizedProduct\Business\PersonalizedProductFacade getFacade()
 * @method \Pyz\Zed\PersonalizedProduct\Communication\PersonalizedProductCommunicationFactory getFactory()
 * @method \Pyz\Zed\PersonalizedProduct\Persistence\PersonalizedProductQueryContainer getQueryContainer()
 */
class IndexController extends AbstractController
{

    /**
     * @return array
     */
    public function indexAction()
    {
        return $this->viewResponse([
            'test' => 'Greetings!',
        ]);
    }

}
