<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(                        
            'himumbai' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/himumbai',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Himumbai\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                
            ),
        ),
    ),
    
    
    'controllers' => array(
        'invokables' => array(
            'Himumbai\Controller\Index' => 'Himumbai\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
       
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
   
);
