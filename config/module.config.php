<?php
/**
 * CoolMS2 Geo Module (http://www.coolms.com/)
 *
 * @link      http://github.com/coolms/geo for the canonical source repository
 * @copyright Copyright (c) 2006-2015 Altgraphic, ALC (http://www.altgraphic.com)
 * @license   http://www.coolms.com/license/new-bsd New BSD License
 * @author    Dmitry Popov <d.popov@altgraphic.com>
 */

namespace CmsGeo;

return [
    'controllers' => [
        'aliases' => [
            'CmsGeo\Controller\Admin' => 'CmsGeo\Mvc\Controller\AdminController',
        ],
        'invokables' => [
            'CmsGeo\Mvc\Controller\AdminController' => 'CmsGeo\Mvc\Controller\AdminController',
        ],
    ],
    'router' => [
        'routes' => [
            'cms-admin' => [
                'child_routes' => [
                    'geo' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/geo[/:controller[/:action[/:id]]]',
                            'constraints' => [
                                'controller' => '[a-zA-Z\-]*',
                                'action' => '[a-zA-Z\-]*',
                                'id' => '[a-zA-Z0-9\-]*',
                            ],
                            'defaults' => [
                                '__NAMESPACE__' => 'CmsGeo\Controller',
                                'controller' => 'Admin',
                                'action' => 'index',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'view_helpers' => [
        'factories' => [
            'cmsTerritoryHierarchy' => 'CmsGeo\Factory\View\Helper\HierarchyHelperFactory',
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __NAMESPACE__ => __DIR__ . '/../view',
        ],
    ],
];
