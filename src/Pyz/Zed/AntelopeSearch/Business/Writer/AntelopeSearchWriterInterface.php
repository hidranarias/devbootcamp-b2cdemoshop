<?php

namespace Pyz\Zed\AntelopeSearch\Business\Writer;

interface AntelopeSearchWriterInterface
{
    /**
     * @param int $idAntelope
     *
     * @return void
     * @throws AmbiguousComparisonException|
     * PropelException
     */
    public function publish(int $idAntelope): void;
}
