<?php

namespace Pyz\Zed\Antelope\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    public function findAntelopeAction(AntelopeCriteriaTransfer $antelopeCriteria)
    {
        return $this->getFacade()
            ->getAntelope($antelopeCriteria);
    }

    public function createAntelopeAction(AntelopeTransfer $antelopeTransfer)
    {
        return $this->getFacade()
            ->createAntelope($antelopeTransfer);
    }
}
