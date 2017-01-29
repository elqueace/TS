<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/platform')) {
            // oc_platform_home
            if (rtrim($pathinfo, '/') === '/platform') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oc_platform_home');
                }

                return array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::indexAction',  '_route' => 'oc_platform_home',);
            }

            if (0 === strpos($pathinfo, '/platform/ad')) {
                // oc_platform_view
                if (0 === strpos($pathinfo, '/platform/advert') && preg_match('#^/platform/advert/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_view')), array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::viewAction',));
                }

                // oc_platform_add
                if ($pathinfo === '/platform/add') {
                    return array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::addAction',  '_route' => 'oc_platform_add',);
                }

            }

            // oc_platform_contact
            if ($pathinfo === '/platform/contact') {
                return array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::contactAction',  '_route' => 'oc_platform_contact',);
            }

            // oc_platform_pricing
            if ($pathinfo === '/platform/pricing') {
                return array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::pricingAction',  '_route' => 'oc_platform_pricing',);
            }

            // oc_platform_about
            if ($pathinfo === '/platform/about') {
                return array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::aboutAction',  '_route' => 'oc_platform_about',);
            }

            // oc_platform_log_reg
            if ($pathinfo === '/platform/log_reg') {
                return array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::log_regAction',  '_route' => 'oc_platform_log_reg',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
