<?php

namespace Pyz\Zed\Antelope\Persistence;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

class AntelopePersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return PyzAntelopeQuery
     */
    public function createPyzAntelopeQuery()
    {
        return PyzAntelopeQuery::create();
    }
}
