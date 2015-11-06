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
        $publication = $em->getRepository('ProjetBundle:Publication')->find($id);
        $rq = $this->getRequest();
        if ($rq->getMethod() == "POST") {
            $date = new \DateTime();
            $commentaire = new \ProjetBundle\Entity\Commentaire();
            $commentaire->setDate($date);
            $commentaire->setPublication($publication);
            $commentaire->setUser($user);
            $commentaire->setText($rq->request->get('comment'));
            $em->persist($commentaire);
            $em->flush();
        }
        return array('publication' => $publication);
    }

    public function likeAction($id, $userId) {
        $now = new \DateTime();
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $publication = $em->getRepository('ProjetBundle:Publication')->find($id);
        $lastlike = $em->getRepository('ProjetBundle:Jaime')->findBy(array('user' => $user, 'publication' => $publication));
        //var_dump($lastlike);die;
        if (count($lastlike)) {
            foreach ($lastlike as $like) {
                if ($like->getLiked() == true) {
                    $like->setLiked(false);
                } else {
                    $like->setLiked(true);
                }
                $em->persist($like);
                $em->flush();
            }
        } else {
            $like = new \ProjetBundle\Entity\Jaime();
            $like->setDate($now);
            $like->setPublication($publication);
            $like->setUser($user);
            $like->setLiked(true);
            $em->persist($like);
            $em->flush();
        }
        return new \Symfony\Component\HttpFoundation\Response(intval($like->getLiked()));
    }

}
