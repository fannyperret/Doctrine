<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Eleve;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/doctrine", name="test")
     */
    public function doctrineAction()
    {
        $em = $this->getDoctrine()->getManager();
        $eleve = new Eleve();
        $eleve->setFirstName('Gérard');
        $eleve->setLastName('Manvussa');
        $eleve->setEmail('gg@google.com');
        $eleve->setAge(35);
        $em->persist($eleve);
        $em->flush();
        return new Response("nouvel élève créé");
    }
}
