<?php

namespace Pyz\Yves\HelloSpryker\Controller;

class IndexController extends \Spryker\Yves\Kernel\Controller\AbstractController
{
 public function indexAction(){
     $data = ['reversedString' => 'Hello Spryker!'];
     return $this->view($data,[],'@HelloSpryker/views/index/index.twig');


 }
}
