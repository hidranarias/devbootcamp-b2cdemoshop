<?php

namespace Pyz\Zed\AntelopeSearch\Business\Writer;

use Generated\Shared\Transfer\AntelopeTransfer;
use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Orm\Zed\AntelopeSearch\Persistence\PyzAntelopeSearchQuery;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

class AntelopeSearchWriter
{
    /**
     * @param int $idAntelope
     *
     * @return void
     * @throws AmbiguousComparisonException|PropelException
     */
    public function publish(int $idAntelope): void
    {
        $antelopeEntity = PyzAntelopeQuery::create()
            ->filterByIdAntelope($idAntelope)
            ->findOne();

        $antelopeTransfer = new AntelopeTransfer();
        $antelopeTransfer->fromArray($antelopeEntity->toArray());

        $searchEntity = PyzAntelopeSearchQuery::create()
            ->filterByFkAntelope($idAntelope)
            ->findOneOrCreate();
        $searchEntity->setFkAntelope($idAntelope);
        $searchEntity->setData($antelopeTransfer->toArray());

        $searchEntity->save();
    }
}
