<?php

namespace Pyz\Zed\Antelope\Persistence;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Spryker\Zed\Kernel\Persistence\AbstractQueryContainer;

class AntelopeQueryContainer extends AbstractQueryContainer implements AntelopeQueryContainerInterface
{

    /**
     * @inheritDoc
     */
    public function queryAntelopes(): PyzAntelopeQuery
    {
       return $this->getFactory()->createpyzAntelopeQuery();
    }
}
