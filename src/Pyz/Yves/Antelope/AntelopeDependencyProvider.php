<?php

namespace Pyz\Yves\Antelope;

use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;

class AntelopeDependencyProvider extends AbstractBundleDependencyProvider
{
    public const CLIENT_TRAINING = 'CLIENT_TRAINING';
    public const CLIENT_STORE = 'CLIENT_STORE';

    public function provideDependencies(Container $container): Container
    {
        $container = $this->addAntelopeClient($container);
        $container = $this->addStoreClient($container);
        return $container;
    }

    protected function addAntelopeClient(Container $container): Container
    {
        $container->set(static::CLIENT_TRAINING, function (Container $container) {
            return $container->getLocator()->antelope()->client();
        });

        return $container;
    }

    protected function addStoreClient(Container $container)
    {
        $container->set(static::CLIENT_STORE, function (Container $container) {
            return $container->getLocator()->store()->client();
        });

        return $container;
    }
}
