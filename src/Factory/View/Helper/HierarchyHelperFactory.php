<?php
/**
 * CoolMS2 Geo Module (http://www.coolms.com/)
 *
 * @link      http://github.com/coolms/geo for the canonical source repository
 * @copyright Copyright (c) 2006-2015 Altgraphic, ALC (http://www.altgraphic.com)
 * @license   http://www.coolms.com/license/new-bsd New BSD License
 * @author    Dmitry Popov <d.popov@altgraphic.com>
 */

namespace CmsGeo\Factory\View\Helper;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface,
    CmsCommon\View\Helper\Hierarchy,
    CmsGeo\Mapping\TerritoryHierarchyInterface;

/**
 * View helper for rendering territory hierarchy.
 */
class HierarchyHelperFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     *
     * @return Hierarchy
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $services = $serviceLocator->getServiceLocator();

        /* @var $mapper \CmsCommon\Persistence\HierarchyMapperInterface */
        $mapper = $services->get('MapperManager')->get(TerritoryHierarchyInterface::class);

        return new Hierarchy($mapper);
    }
}
