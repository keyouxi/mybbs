<?php

namespace Bbs\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BbsAdminBundle:Default:index.html.twig');
    }
}
