<?php

namespace ContainerC2hw8nu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeExtension_Form_ValidatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')), true, ($container->privates['twig.form.renderer'] ?? $container->load('getTwig_Form_RendererService')), NULL);
    }
}
