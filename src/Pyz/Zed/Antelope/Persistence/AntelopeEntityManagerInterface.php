<?php

namespace Pyz\Zed\Antelope\Persistence;


/**
 * @method \Pyz\Zed\Antelope\Persistence\AntelopePersistenceFactory getFactory()
 */
interface AntelopeEntityManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function saveAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer;
}
