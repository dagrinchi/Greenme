<?php

namespace C4C\Bundle\GreenmeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
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
use C4C\Bundle\GreenmeBundle\Document\Footprint,
    C4C\Bundle\GreenmeBundle\Form\Type\FootprintType;

/**
 * @Prefix("footprint")
 * @NamePrefix("footprint_")
 */
class FootprintAPIController  extends FOSRestController {

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
     *  description="Este metodo devuelve el listado de huellas",
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra una huella."
     *     }
     * )
     */
    public function getAction() {
        
        $dm = $this->get('doctrine_mongodb')->getManager();
        $footp = $dm->getRepository('C4CGreenmeBundle:Footprint')->findAll()->toArray();
        
        $view = $this->view($footp, 200)
                ->setHeader('Access-Control-Allow-Origin', '*');                
        return $view;
    }
    
    /**
     * @ApiDoc(
     *  description="Crear una nueva huella",
     *  input="C4C\Bundle\GreenmeBundle\Form\Type\FootprintType",
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra una huella"
     *     }
     * )     
     */
    public function postAction(Request $r) {        
        
        $dm = $this->get('doctrine_mongodb')->getManager();
        $user = $this->get('security.context')->getToken()->getUser();

//	$data = json_decode($r->getContent(), true);
//    	$r->request->replace(is_array($data) ? $data : array());

        $footp = new Footprint();
        $footp->setUser($user);
        
        $form = $this->createForm(new FootprintType(), $footp);
        $form->bind($r);

        $result = array();

        if ($form->isValid()) {
            $dm->persist($footp);
            $dm->flush();

            $result['flash'] = 'Item creado con éxito.';
        } else {
            $view = new FOSView();
            return $view->setStatusCode(500);            
        }

        $view = $this->view($footp, 200)
                ->setHeader('Access-Control-Allow-Origin', '*');                
        return $view;
    }
    
     /**
     * @ApiDoc(
     *  description="Eliminar una huella",     
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra un reporte."
     *     }
     * )
     */
    public function deleteAction($id) {
        
        $dm = $this->get('doctrine_mongodb')->getManager();
        $footp = $dm->getRepository('C4CGreenmeBundle:Footprint')->find($id);

        $dm->remove($footp);
        $dm->flush();

        return new JsonResponse(array('flash' => 'Item eliminado'));
    }

}