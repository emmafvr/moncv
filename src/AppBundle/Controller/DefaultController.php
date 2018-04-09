<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Formations;

class DefaultController extends Controller
{
    /**
    * @Route("/cv/{name}/{firstname}", name="homepage")
    * @Template()
    */
    public function indexAction($name = 'Favre', $firstname='Emma')
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Formations');
        $formations = $repo->findAll();
        $repo = $this->getDoctrine()->getRepository('AppBundle:Loisirs');
        $loisirs = $repo->findAll();
        $repo = $this->getDoctrine()->getRepository('AppBundle:Experiences');
        $experiences = $repo->findAll();
        
        return array('name' => $name, 'firstname' => $firstname, 'formations'=>$formations, 'loisirs'=>$loisirs, 'experiences'=>$experiences);
    }
    /**
     * @Route("/emma", name="emma")
     * @Template()
     */
    public function emmaAction(Request $request)
    {
        return array();
    }
    
    /**
     * @Route("/insert", name="insert")
     * @Template()
     */
    public function insertAction()
    {
        $form = new Formations();
        $form->setName('DUT Métiers du Multimédia et de l Internet');
        $form->Setlieu('IUT 1');
        $form->Setdatedebut(new \DateTime());
        $form->Setdatefin(new \DateTime());
        
        $eManager=$this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();
        
        return array();
    }
    
    /**
     * @Route("/admin)")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}
