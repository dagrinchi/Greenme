<?php

namespace C4C\Bundle\GreenmeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="green_home")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("/reg", name="green_registration")
     * @Template()
     */
    public function regAction() {
        return array();
    }    
    
    /**
     * @Secure(roles="ROLE_USER")
     * @Route("/aprende", name="green_aprende")
     * @Template()
     */
    public function aprendeAction() {
        return array();
    }
    
    /**
     * @Secure(roles="ROLE_USER")
     * @Route("/habitos", name="green_habitos")
     * @Template()
     */
    public function habitosAction() {
        return array();
    }
    
    /**
     * @Secure(roles="ROLE_USER")
     * @Route("/reporta", name="green_reporta")
     * @Template()
     */
    public function reportaAction() {        
        $dm = $this->get('doctrine_mongodb')->getManager();
        $reports = $dm->getRepository('C4CGreenmeBundle:Report')->findAll()->toArray();
        return array('reports' => $reports);
    }
    
    /**
     * @Route("/login", name="green_login")
     * @Template()
     */
    public function loginAction() {
        return array();
    }
    
    /**
     * @Secure(roles="ROLE_USER")
     * @Route("/dashboard", name="green_dashboard")
     * @Template()
     */
    public function dashboardAction() {
        return array();
    }
}
