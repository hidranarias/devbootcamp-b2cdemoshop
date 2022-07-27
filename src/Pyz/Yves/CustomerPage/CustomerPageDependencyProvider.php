<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\CustomerPage;

use Spryker\Yves\Kernel\Container;
use SprykerShop\Yves\AgentPage\Plugin\FixAgentTokenAfterCustomerAuthenticationSuccessPlugin;
use SprykerShop\Yves\CustomerPage\CustomerPageDependencyProvider as SprykerShopCustomerPageDependencyProvider;
use SprykerShop\Yves\CustomerReorderWidget\Plugin\CustomerPage\CustomerReorderWidgetPlugin;

class CustomerPageDependencyProvider extends SprykerShopCustomerPageDependencyProvider
{
    public const CLIENT_ANTELOPE = 'CLIENT_ANTELOPE';

    public function provideDependencies(Container $container): Container
    {
        $container = parent::provideDependencies($container);
        $container = $this->addAntelopeClient($container);

        return $container;
    }

    /**
     * @return string[]
     */
    protected function getCustomerOverviewWidgetPlugins(): array
    {
        return [
            CustomerReorderWidgetPlugin::class,
        ];
    }

    /**
     * @return string[]
     */
    protected function getCustomerOrderListWidgetPlugins(): array
    {
        return [
            CustomerReorderWidgetPlugin::class,
        ];
    }

    /**
     * @return string[]
     */
    protected function getCustomerOrderViewWidgetPlugins(): array
    {
        return [
            CustomerReorderWidgetPlugin::class,
        ];
    }

    /**
     * @return \SprykerShop\Yves\AgentPage\Plugin\FixAgentTokenAfterCustomerAuthenticationSuccessPlugin[]
     */
    protected function getAfterCustomerAuthenticationSuccessPlugins(): array
    {
        return [
            new FixAgentTokenAfterCustomerAuthenticationSuccessPlugin(),
        ];
    }

    protected function addAntelopeClient(Container $container): Container
    {
        $container->set(static::CLIENT_ANTELOPE, function (Container $container) {
            return $container->getLocator()->antelope()->client();
        });

        return $container;
    }

}
