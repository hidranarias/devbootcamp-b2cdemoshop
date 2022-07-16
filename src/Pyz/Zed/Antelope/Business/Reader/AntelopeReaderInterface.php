<?php

namespace Pyz\Zed\Antelope\Business\Reader;

use Generated\Shared\Transfer\AntelopeTransfer;

interface AntelopeReaderInterface
{
    /**
     * @param AntelopeTransfer $antelopeTransfer
     *
     * @return AntelopeTransfer|null
     */
    public function getAntelope(AntelopeTransfer $antelopeTransfer): ?AntelopeTransfer;
}
