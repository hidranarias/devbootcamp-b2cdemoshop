<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\CmsBlockWidget;

use Pyz\Shared\CmsContentWidgetAntelopeConnector\ContentWidgetConfigurationProvider\CmsContentWidgetAntelopeConnectorConfigurationProvider;
use Pyz\Yves\CmsContentWidgetAntelopeConnector\Plugin\CmsContentWidget\AntelopeContentWidgetPlugin;
use SprykerShop\Yves\CmsBlockWidget\CmsBlockWidgetDependencyProvider as SprykerCmsBlockWidgetDependencyProvider;
use SprykerShop\Yves\CmsBlockWidget\Plugin\Twig\CmsBlockPlaceholderTwigPlugin;
use SprykerShop\Yves\CmsBlockWidget\Plugin\Twig\CmsBlockWidgetTwigPlugin;

class CmsBlockWidgetDependencyProvider extends SprykerCmsBlockWidgetDependencyProvider
{
    /**
     * @return \Spryker\Shared\Twig\TwigExtensionInterface[]
     */
    protected function getTwigExtensionPlugins(): array
    {
        return [
            new CmsBlockWidgetTwigPlugin(),
            new CmsBlockPlaceholderTwigPlugin(),

        ];
    }
}
