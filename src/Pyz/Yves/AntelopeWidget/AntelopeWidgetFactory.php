<?php

namespace Pyz\Yves\AntelopeWidget;

use Pyz\Client\Antelope\AntelopeClientInterface;
use Spryker\Yves\Kernel\AbstractFactory;

class AntelopeWidgetFactory extends AbstractFactory
{
    /**
     * @return AntelopeClientInterface
     */
    public function getAntelopeClient(): AntelopeClientInterface
    {
        return $this->getProvidedDependency(AntelopeWidgetDependencyProvider::CLIENT_ANTELOPE);
    }
}
