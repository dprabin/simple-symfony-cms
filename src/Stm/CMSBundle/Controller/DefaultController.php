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

    public function displayAction($id){
    	$em = $this->getDoctrine()->getManager();
    	$page = $em->getRepository('StmCMSBundle:Page')->find($id);
        return $this->render('StmCMSBundle:Default:display.html.twig', array('page'=>$page));
    }
}
