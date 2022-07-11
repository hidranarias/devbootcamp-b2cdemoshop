<?php

namespace Pyz\Yves\HelloWorld\Controller;

use Elastica\Request;
use Spryker\Yves\Kernel\Controller\AbstractController;


class IndexController extends AbstractController
{
 public function indexAction(Request $req = null)
 {
   $data = [''];
     $data = ['helloWorld' => 'Hello World!'];


     return $this->view(
         $data,
         [],
         '@HelloWorld/views/index/index.twig'
     );
 }
}
