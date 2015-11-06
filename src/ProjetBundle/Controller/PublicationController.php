<?php

namespace ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PublicationController extends Controller {

    public function ajouterAction() {
        $now = new \DateTime();
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $rq = $this->getRequest();
        $publication = new \ProjetBundle\Entity\Publication();
        $publication->setDatepublication($now);
        $publication->setText($rq->request->get('text-area-post'));
        $publication->setUser($user);
        $em->persist($publication);
        $em->flush();
        if ($rq->files->get('filePost') != null) {
            $destination = __DIR__ . '/../../../web/uploads';
            @mkdir($destination, 0755, true);
            $fichierImport = $rq->files->get('filePost');
            $tNomFichier = explode('.', $fichierImport->getClientOriginalName());
            $fichierImport->move($destination, $fichierImport->getClientOriginalName());
            $file = new \UserBundle\Entity\Fichier();
            $file->setNom($fichierImport->getClientOriginalName());
            //$file->setUser(null);
            $file->setPublication($publication);
            $em->persist($file);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('projet_homepage'), 301);
    }

    /**
     * @Template()
     */
    public function voirAction($id) {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $publication=$em->getRepository('ProjetBundle:Publication')->find($id);
        
        return array('publication' => $publication);
    }

}
