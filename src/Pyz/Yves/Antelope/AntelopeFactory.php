<?php

namespace Pyz\Yves\Antelope;

use Spryker\Client\Store\StoreClientInterface;
use Spryker\Yves\Kernel\AbstractFactory;

class AntelopeFactory extends AbstractFactory
{
    public function getTrainingClient(): TrainingClientInterface
    {
        return $this->getProvidedDependency(AntelopeDependencyProvider::CLIENT_TRAINING);
    }

    public function getStoreClient(): StoreClientInterface
    {
        return $this->getProvidedDependency(AntelopeDependencyProvider::CLIENT_STORE);
    }
}
