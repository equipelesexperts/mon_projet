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
        $em = $this->getDoctrine()->getEntityManager();
        //$user= new \ProjetBundle\Entity\User();
        $user = $em->getRepository("ProjetBundle:User")->find($id);
        $form = $this->createForm(new UserType, $user);
        $rq = $this->getRequest();
        if ($rq->getMethod() == "POST") {
            $form->bind($rq);
            $data = $rq->request->get('projetbundle_user');
            $password = $data['plainPassword'];
            if ($password != "") {
                $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
                $user->setPassword($encoder->encodePassword($password, $user->getSalt()));
            }
            $em->persist($user);
            if ($rq->files->get('photo') != null) {
                $destination = __DIR__ . '/../../../web/uploads';
                @mkdir($destination, 0755, true);
                $fichierImport = $rq->files->get('photo');
                $tNomFichier = explode('.', $fichierImport->getClientOriginalName());
                $extension = $tNomFichier[count($tNomFichier) - 1];
                $nomFichier = $user;
                $fichierImport->move($destination, $fichierImport->getClientOriginalName());
                $file = new \UserBundle\Entity\Fichier();
                $file->setNom($fichierImport->getClientOriginalName());
                $file->setUser($user);
                $file->setCreateur($user);
                $em->persist($file);
            }
            $em->flush();
        }
        $image=$user->getLastFichier();
        return array(
            'image'=>$image,
            'form' => $form->createView(),
            'id' => $id,
            'user'=>$user
        );
    }

    /**
     * @Template()
     */
    public function listerAction() {
        return array();
    }

    public function rechercheAction() {
        $rech = $this->getRequest()->request->get('srch-term');
        return new Response($this->renderView('UserBundle:Registration:lister.html.twig', array('rech' => $rech)));
    }

    public function listeAction($rech = null) {
        $em = $this->getDoctrine()->getEntityManager();
        if ($rech != null) {
            $liste = $em->getRepository("ProjetBundle:User")->createQueryBuilder('u')
                    ->Where('u.email LIKE :rech')
                    ->orWhere('u.username LIKE :rech')
                    ->setParameter('rech', $rech)
                    ->getQuery()
                    ->getResult();
            ;
        } else {
            $liste = $em->getRepository("ProjetBundle:User")->findAll();
        }
        return new Response($this->renderView('UserBundle:Registration:liste.xml.twig', array(
                    'liste' => $liste,
                )), 200, array('Content-Type' => 'Application/xml')
        );
    }

}
