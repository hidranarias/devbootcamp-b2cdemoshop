<?php


namespace Pyz\Zed\AntelopeSearch\Business;

use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\Kernel\Business\AbstractFacade;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * @method AntelopeSearchBusinessFactory getFactory()
 */
class AntelopeSearchFacade extends AbstractFacade implements AntelopeSearchFacadeInterface
{
    /**
     * @param int $idAntelope
     *
     * @return void
     * @throws PropelException|AmbiguousComparisonException

     */
    public function publish(int $idAntelope): void
    {
        $this->getFactory()
            ->createAntelopeSearchWriter()
            ->publish($idAntelope);
    }
}
