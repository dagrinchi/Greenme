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
use C4C\Bundle\GreenmeBundle\Document\Subcategory,
    C4C\Bundle\GreenmeBundle\Form\Type\SubcategoryType;

/**
 * @Prefix("subcategory")
 * @NamePrefix("subcategory_")
 */
class SubcategoryAPIController extends FOSRestController {
    
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
     *  description="Este metodo devuelve el listado de subcategorias",
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra una subcategoria"
     *     }
     * )
     */
    public function getAction() {

        $dm = $this->get('doctrine_mongodb')->getManager();
        $scats = $dm->getRepository('C4CGreenmeBundle:Subcategory')->findAll()->toArray();
        $view = $this->view($scats, 200)
                ->setHeader('Access-Control-Allow-Origin', '*');                
        return $view;
    }
    
    /**
     * @ApiDoc(
     *  resource=true,
     *  description="Este metodo muestra la información por categoría",
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra una subcategoria"
     *     }
     * )
     */
    public function getShowAction($category) {

        $dm = $this->get('doctrine_mongodb')->getManager();
        $scats = $dm->getRepository('C4CGreenmeBundle:Subcategory')
                ->findBy(array('category' => $category))
                ->toArray();
        $view = $this->view($scats, 200)
                ->setHeader('Access-Control-Allow-Origin', '*');                
        return $view;
    }

    /**
     * @ApiDoc(
     *  description="Crear una nueva subcategoria",
     *  input="C4C\Bundle\GreenmeBundle\Form\Type\SubcategoryType",
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra una subcategoria."
     *     }
     * )
     * @View
     */
    public function postAction(Request $r) {

        $dm = $this->get('doctrine_mongodb')->getManager();

//	$data = json_decode($r->getContent(), true);
//    	$r->request->replace(is_array($data) ? $data : array());

        $scategory = new Subcategory();
        $form = $this->createForm(new SubcategoryType(), $scategory);
        $form->bind($r);

        $result = array();

        if ($form->isValid()) {
            $dm->persist($scategory);
            $dm->flush();

            $result['flash'] = 'Item creado con éxito.';
        } else {
            $view = new FOSView();
            return $view->setStatusCode(500);
        }

        $view = $this->view($scategory, 200)
                ->setHeader('Access-Control-Allow-Origin', '*');                
        return $view;
    }
    
}