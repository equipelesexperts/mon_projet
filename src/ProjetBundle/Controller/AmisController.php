<?php

namespace ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AmisController extends Controller {

    public function ajoutAction() {
        $rq = $this->getRequest();
        $id = $rq->request->get('id');
        $usercourant = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        //$user= new \ProjetBundle\Entity\User();
        $user = $em->getRepository("ProjetBundle:User")->find($id);
        $user->addUtisateur($usercourant);
        $usercourant->addUtisateur($user);
        $em->persist($user);
        $em->flush();
        return new Response(0);
    }

    public function supprimerAction() {
        $rq = $this->getRequest();
        $id = $rq->request->get('id');
        $usercourant = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        //$user= new \ProjetBundle\Entity\User();
        $user = $em->getRepository("ProjetBundle:User")->find($id);
        $user->removeUtisateur($usercourant);
        $usercourant->removeUtisateur($user);
        $em->persist($usercourant);
        $em->flush();
        return new Response(0);
    }
}
