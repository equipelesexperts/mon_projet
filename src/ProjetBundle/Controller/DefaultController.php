<?php

namespace ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user=  $this->get('security.context')->getToken()->getUser();
        $em=  $this->getDoctrine()->getEntityManager();
        $publication = $em->getRepository("ProjetBundle:Publication")->findBy(array('user'=>$user->getId()));
        return $this->render('ProjetBundle:Default:index.html.twig',array('publication'=>$publication));
    }
}
