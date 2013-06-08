<?php

namespace C4C\Bundle\GreenmeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Prefix,
    FOS\RestBundle\Controller\Annotations\NamePrefix,
    FOS\RestBundle\Controller\Annotations\View,
    FOS\RestBundle\View\RouteRedirectView,
    FOS\RestBundle\View\View AS FOSView,
    FOS\RestBundle\Controller\Annotations\QueryParam,
    FOS\RestBundle\Request\QueryFetcher;
use JMS\SecurityExtraBundle\Annotation\Secure;

/**
 * @Prefix("footprint")
 * @NamePrefix("footprint_")
 */
class FootprintAPIController extends Controller {

	public function getAction() {

	}

	public function postAction() {

	}

	public function putAction() {

	}

	public function deleteAction() {
		
	}

}