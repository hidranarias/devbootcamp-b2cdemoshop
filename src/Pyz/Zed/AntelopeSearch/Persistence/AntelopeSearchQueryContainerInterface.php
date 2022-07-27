<?php

namespace Pyz\Zed\AntelopeSearch\Persistence;


/**
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchPersistenceFactory getFactory()
 */
interface AntelopeSearchQueryContainerInterface
{
    public function findAntelope(AntelopeTransfer $antelopeTransfer);
}
