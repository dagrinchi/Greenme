<?php

namespace C4C\Bundle\GreenmeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Prefix,
    FOS\RestBundle\Controller\Annotations\NamePrefix,
    FOS\RestBundle\Controller\Annotations\View,
    FOS\RestBundle\View\RouteRedirectView,
    FOS\RestBundle\View\View AS FOSView,
    FOS\RestBundle\Controller\Annotations\QueryParam,
    FOS\RestBundle\Request\QueryFetcher,
    FOS\RestBundle\Controller\FOSRestController;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use C4C\Bundle\GreenmeBundle\Document\User,
    C4C\Bundle\GreenmeBundle\Form\Type\UserType;

/**
 * @Prefix("registration")
 * @NamePrefix("registration_")
 */
class UserAPIController extends FOSRestController {
    
    private function isAuthenticated() {
        if ($this->get('security.context')->isGranted('ROLE_USER')) { 
            return TRUE;
        } else {
            return FALSE;
        }     
    }
    
    /**
     * @ApiDoc(
     *  resource=true,
     *  description="Este metodo devuelve el listado de usuarios",
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra un usuario"
     *     }
     * )
     */
    public function getAction() {
        
        if (!$this->isAuthenticated()) {
            $view = new FOSView();
            return $view->setStatusCode(401);
        }
        
        $dm = $this->get('doctrine_mongodb')->getManager();
        $users = $dm->getRepository('C4CGreenmeBundle:User')->findAll()->toArray();
        $view = $this->view($users, 200)
                ->setHeader('Access-Control-Allow-Origin', '*');                
        return $view;
    }
    
    /**
     * @ApiDoc(
     *  description="Registrar un nuevo usuario",
     *  input="C4C\Bundle\GreenmeBundle\Form\Type\UserType",
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra un usuario."
     *     }
     * )
     */
    public function postAction(Request $r) {

        $dm = $this->get('doctrine_mongodb')->getManager();

//	$data = json_decode($r->getContent(), true);
//    	$r->request->replace(is_array($data) ? $data : array());

        $user = new User();
        $form = $this->createForm(new UserType('C4C\Bundle\GreenmeBundle\Document\User'), $user);
        $form->bind($r);

        $result = array();

        if ($form->isValid()) {
            $dm->persist($user);
            $dm->flush();

            $result['flash'] = 'Item creado con éxito.';
        } else {
            $view = new FOSView();
            return $view->setStatusCode(500);
        }

        $view = $this->view($user, 200)
                ->setHeader('Access-Control-Allow-Origin', '*');                
        return $view;
    }
    
}