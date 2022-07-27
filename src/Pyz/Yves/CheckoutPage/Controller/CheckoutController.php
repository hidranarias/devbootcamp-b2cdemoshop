<?php

namespace Pyz\Yves\CheckoutPage\Controller2;

use Pyz\Yves\CheckoutPage\CheckoutPageFactory;
use SprykerShop\Yves\CheckoutPage\Controller\CheckoutController as SprykerShopCheckoutController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method CheckoutPageFactory getFactory()
 */
class CheckoutController extends SprykerShopCheckoutController
{
    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function voucherAction(Request $request)
    {
        return 'Hello Voucher Step';
    }
}


