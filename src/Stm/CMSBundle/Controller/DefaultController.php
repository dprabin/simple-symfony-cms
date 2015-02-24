<?php

namespace Stm\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$pages = $em->getRepository('StmCMSBundle:Page')->findAll();


        return $this->render('StmCMSBundle:Default:index.html.twig', array('pages'=>$pages));
    }
}
