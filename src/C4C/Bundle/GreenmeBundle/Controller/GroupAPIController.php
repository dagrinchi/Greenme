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
use C4C\Bundle\GreenmeBundle\Document\Group,
    C4C\Bundle\GreenmeBundle\Form\Type\GroupType;

/**
 * @Prefix("group")
 * @NamePrefix("group_")
 */
class GroupAPIController extends FOSRestController {

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
     *  description="Este metodo devuelve el listado de grupos",
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra un grupo"
     *     }
     * )     
     */
    public function getAction() {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $groups = $dm->getRepository('C4CGreenmeBundle:Group')->findAll()->toArray();
        $view = $this->view($groups, 200)
                ->setHeader('Access-Control-Allow-Origin', '*');                
        return $view;
    }
    
    
    /**
     * @ApiDoc(
     *  description="Crear un nuevo grupo",
     *  input="C4C\Bundle\GreenmeBundle\Form\Type\GroupType",
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra un grupo."
     *     }
     * )     
     */
    public function postAction(Request $r) {

        $dm = $this->get('doctrine_mongodb')->getManager();

//	$data = json_decode($r->getContent(), true);
//    	$r->request->replace(is_array($data) ? $data : array());

        $group = new Group();
        $form = $this->createForm(new GroupType('C4C\Bundle\GreenmeBundle\Document\Group'), $group);
        $form->bind($r);

        $result = array();

        if ($form->isValid()) {
            $dm->persist($group);
            $dm->flush();

            $result['flash'] = 'Item creado con éxito.';
        } else {
            $view = new FOSView();
            return $view->setStatusCode(500);
        }

        $view = $this->view($group, 200)
                ->setHeader('Access-Control-Allow-Origin', '*');                
        return $view;
    }
    
}