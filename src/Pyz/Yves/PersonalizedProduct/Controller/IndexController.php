<?php

namespace Pyz\Yves\PersonalizedProduct\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;

class IndexController extends AbstractController
{
 public function indexAction()

 {
     return $this->view(
         [],[],'@PersonalizedProduct/views/Index/index.twig'
     );
 }
}
