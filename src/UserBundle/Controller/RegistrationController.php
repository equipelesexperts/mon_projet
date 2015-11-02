<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ProjetBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController extends Controller {

    public function indexAction($param) {
        return 0;
    }

    /**
     * @Template()
     */
    public function editerAction($id) {
        $em=  $this->getDoctrine()->getEntityManager();
        //$user= new \ProjetBundle\Entity\User();
        $user=$em->getRepository("ProjetBundle:User")->find($id);
        $form=$this->createForm(new UserType,$user);
        $rq=  $this->getRequest();
        if($rq->getMethod()=="POST"){
            $form->bind($rq);
            $data=$rq->request->get('projetbundle_user');
            $password=$data['plainPassword'];
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
            $user->setPassword($encoder->encodePassword($password, $user->getSalt()));
            $em->persist($user);
            $em->flush();
        }
        return array(
            'form'=>$form->createView(),
            'id'=>$id
        );
    }
    
    /**
     * @Template()
     */
    public function listerAction() {
        return array();
    }
    public function listeAction() {
        $em=  $this->getDoctrine()->getEntityManager();
        $liste=$em->getRepository("ProjetBundle:User")->findAll();
         return new Response ($this->renderView('UserBundle:Registration:liste.xml.twig', array(
                'liste' => $liste,
            )),
            200,
            array('Content-Type' => 'Application/xml')
        );
    }
}
