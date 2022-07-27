<?php

namespace Pyz\Client\Antelope;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;

/**
 *
 */
interface AntelopeClientInterface
{
    /**
     * @param string $name
     *
     * @return array
     */
    public function getAntelopeByName(string $name): array;

    /**
     * @param string $name
     *
     * @return array<AntelopeTransfer>
     */
    public function getAntelopes(): array;

    /**
     * @param AntelopeCriteriaTransfer $antelopeCriteriaTransfer
     *
     * @return AntelopeResponseTransfer
     */
    public function getAntelope(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): AntelopeResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function createAntelope(AntelopeTransfer $antelopeCriteriaTransfer): AntelopeTransfer;
}

