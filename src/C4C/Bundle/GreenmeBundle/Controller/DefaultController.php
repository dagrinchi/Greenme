<?php

namespace C4C\Bundle\GreenmeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
     * @Route("/aprende", name="green_aprende")
     * @Template()
     */
    public function aprendeAction() {
        return array();
    }
    
    /**
     * @Route("/habitos", name="green_habitos")
     * @Template()
     */
    public function habitosAction() {
        return array();
    }
    
    /**
     * @Route("/reporta", name="green_reporta")
     * @Template()
     */
    public function reportaAction() {
        return array();
    }
    
    /**
     * @Route("/login", name="green_login")
     * @Template()
     */
    public function loginAction() {
        return array();
    }
    
    /**
     * @Route("/dashboard", name="green_dashboard")
     * @Template()
     */
    public function dashboardAction() {
        return array();
    }
}
