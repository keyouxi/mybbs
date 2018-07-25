<?php

namespace Bbs\ShowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@BbsShow/Default/index.html.twig');
    }
}
