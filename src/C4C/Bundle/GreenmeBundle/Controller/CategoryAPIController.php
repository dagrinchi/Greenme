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
use C4C\Bundle\GreenmeBundle\Document\Category,
    C4C\Bundle\GreenmeBundle\Form\Type\CategoryType;

/**
 * @Prefix("category")
 * @NamePrefix("category_")
 */
class CategoryAPIController extends FOSRestController {
    
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
     *  description="Este metodo devuelve el listado de categorias",
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra una categoria"
     *     }
     * )
     * @View
     */
    public function getAction() {
        
        $dm = $this->get('doctrine_mongodb')->getManager();
        $cats = $dm->getRepository('C4CGreenmeBundle:Category')->findAll()->toArray();
        
        $view = $this->view($cats, 200)
                ->setHeader('Access-Control-Allow-Origin', '*');                
        return $view;
    }
    
    /**
     * @ApiDoc(
     *  description="Crear una nueva categoria",
     *  input="C4C\Bundle\GreenmeBundle\Form\Type\CategoryType",
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra una categoria."
     *     }
     * )
     * @View
     */
    public function postAction(Request $r) {

        $dm = $this->get('doctrine_mongodb')->getManager();

//	$data = json_decode($r->getContent(), true);
//    	$r->request->replace(is_array($data) ? $data : array());

        $category = new Category();
        $form = $this->createForm(new CategoryType(), $category);
        $form->bind($r);

        $result = array();

        if ($form->isValid()) {
            $dm->persist($category);
            $dm->flush();

            $result['flash'] = 'Item creado con éxito.';
        } else {
            $view = new FOSView();
            return $view->setStatusCode(500);
        }

        return $category;
    }

}