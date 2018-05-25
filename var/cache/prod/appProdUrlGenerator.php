<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'oc_platform_home' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/platform',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platform_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platform/advert',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platform_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platform_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platform/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platform_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platform/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_core_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\CoreBundle\\Controller\\CoreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_core_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\CoreBundle\\Controller\\CoreController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
