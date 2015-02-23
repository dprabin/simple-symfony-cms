<?php

namespace Stm\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StmCMSBundle:Default:index.html.twig');
    }
}
