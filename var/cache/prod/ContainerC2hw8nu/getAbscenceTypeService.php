<?php

namespace ContainerC2hw8nu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAbscenceTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\AbscenceType' shared autowired service.
     *
     * @return \App\Form\AbscenceType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\AbscenceType'] = new \App\Form\AbscenceType();
    }
}
