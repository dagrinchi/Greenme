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
    FOS\RestBundle\Request\QueryFetcher;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use C4C\Bundle\GreenmeBundle\Document\Report,
    C4C\Bundle\GreenmeBundle\Form\Type\ReportType;

/**
 * @Prefix("reports")
 * @NamePrefix("reports_")
 */
class ReportAPIController extends Controller {
    
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
     *  description="Este metodo devuelve el listado de reportes.",
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra un reporte."
     *     }
     * )
     * @View
     */
    public function getAction() {
        
        if (!$this->isAuthenticated()) {
            $view = new FOSView();
            return $view->setStatusCode(401);
        }
        
        $dm = $this->get('doctrine_mongodb')->getManager();
        $reports = $dm->getRepository('C4CGreenmeBundle:Report')->findAll()->toArray();
        return $reports;
    }

    /**
     * @ApiDoc(
     *  description="Mostrar un reporte",     
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra un reporte."
     *     }
     * )
     * @View
     */
    public function showAction($id) {
        
        if (!$this->isAuthenticated()) {
            $view = new FOSView();
            return $view->setStatusCode(401);
        }
        
        $dm = $this->get('doctrine_mongodb')->getManager();
        $report = $dm->getRepository('C4CGreenmeBundle:Report')->find($id);
        return $report;
    }

    /**
     * @ApiDoc(
     *  description="Crear un nuevo reporte",
     *  input="C4C\Bundle\GreenmeBundle\Form\Type\ReportType",
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra un reporte."
     *     }
     * )
     */
    public function postAction(Request $r) {
        
        if (!$this->isAuthenticated()) {
            $view = new FOSView();
            return $view->setStatusCode(401);
        }
        
        $dm = $this->get('doctrine_mongodb')->getManager();

//	$data = json_decode($r->getContent(), true);
//    	$r->request->replace(is_array($data) ? $data : array());

        $report = new Report();
        $form = $this->createForm(new ReportType(), $report);
        $form->bind($r);

        $result = array();

        if ($form->isValid()) {
            $dm->persist($report);
            $dm->flush();

            $result['flash'] = 'Item creado con éxito.';
        } else {
            $result['flash'] = 'Hay errores en el formulario.';
        }

        return new JsonResponse($result);
    }

    /**
     * @ApiDoc(
     *  description="Actualizar un reporte",
     *  input="C4C\Bundle\GreenmeBundle\Form\Type\ReportType",
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra un reporte."
     *     }
     * )
     */
    public function putAction(Request $r, $id) {
        
        if (!$this->isAuthenticated()) {
            $view = new FOSView();
            return $view->setStatusCode(401);
        }
        
        $dm = $this->get('doctrine_mongodb')->getManager();
        $report = $dm->getRepository('C4CGreenmeBundle:Report')->find($id);

//        $data = json_decode($r->getContent(), true);
//        $r->request->replace(is_array($data) ? $data : array());

        $form = $this->createForm(new ReportType(), $report);
        $form->bind($r);

        $result = array();

        if ($form->isValid()) {
            $dm->persist($report);
            $dm->flush();

            $result['flash'] = 'Item actualizado con éxito.';
        } else {
            $result['flash'] = 'Hay errores en el formulario.';
        }

        return new JsonResponse($result);
    }

    /**
     * @ApiDoc(
     *  description="Eliminar un reporte",     
     *  statusCodes={
     *         200="Retorna con éxito",
     *         401="Retorna cuando no está autorizado",
     *         404="Retorna cuando no encuentra un reporte."
     *     }
     * )
     */
    public function deleteAction($id) {
        
        if (!$this->isAuthenticated()) {
            $view = new FOSView();
            return $view->setStatusCode(401);
        }
        
        $dm = $this->get('doctrine_mongodb')->getManager();
        $report = $dm->getRepository('C4CGreenmeBundle:Report')->find($id);

        $dm->remove($report);
        $dm->flush();

        return new JsonResponse(array('flash' => 'Item eliminado'));
    }

}