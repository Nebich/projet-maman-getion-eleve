<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
require __DIR__.'/ContainerYFvYqZt/App_KernelDevDebugContainer.php';
require __DIR__.'/ContainerYFvYqZt/EntityManager_9a5be93.php';
require __DIR__.'/ContainerYFvYqZt/getWebpackEncore_TagRendererService.php';
require __DIR__.'/ContainerYFvYqZt/getWebpackEncore_ExceptionListenerService.php';
require __DIR__.'/ContainerYFvYqZt/getWebpackEncore_EntrypointLookupCollectionService.php';
require __DIR__.'/ContainerYFvYqZt/getWebpackEncore_EntrypointLookupDefaultService.php';
require __DIR__.'/ContainerYFvYqZt/getWebProfiler_Controller_RouterService.php';
require __DIR__.'/ContainerYFvYqZt/getWebProfiler_Controller_ProfilerService.php';
require __DIR__.'/ContainerYFvYqZt/getWebProfiler_Controller_ExceptionPanelService.php';
require __DIR__.'/ContainerYFvYqZt/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerYFvYqZt/getValidator_ExpressionService.php';
require __DIR__.'/ContainerYFvYqZt/getValidator_EmailService.php';
require __DIR__.'/ContainerYFvYqZt/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerYFvYqZt/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerYFvYqZt/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerYFvYqZt/getSessionService.php';
require __DIR__.'/ContainerYFvYqZt/getServicesResetterService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_HelperService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerYFvYqZt/getSecrets_VaultService.php';
require __DIR__.'/ContainerYFvYqZt/getRouting_LoaderService.php';
require __DIR__.'/ContainerYFvYqZt/getPropertyAccessorService.php';
require __DIR__.'/ContainerYFvYqZt/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerYFvYqZt/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerYFvYqZt/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerYFvYqZt/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerYFvYqZt/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerYFvYqZt/getForm_TypeExtension_Form_DataCollectorService.php';
require __DIR__.'/ContainerYFvYqZt/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerYFvYqZt/getForm_Type_FormService.php';
require __DIR__.'/ContainerYFvYqZt/getForm_Type_EntityService.php';
require __DIR__.'/ContainerYFvYqZt/getForm_Type_ColorService.php';
require __DIR__.'/ContainerYFvYqZt/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerYFvYqZt/getForm_ServerParamsService.php';
require __DIR__.'/ContainerYFvYqZt/getForm_RegistryService.php';
require __DIR__.'/ContainerYFvYqZt/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerYFvYqZt/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/ContainerYFvYqZt/getErrorControllerService.php';
require __DIR__.'/ContainerYFvYqZt/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerYFvYqZt/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerYFvYqZt/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerYFvYqZt/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerYFvYqZt/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerYFvYqZt/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerYFvYqZt/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerYFvYqZt/getDoctrine_Migrations_ContainerAwareMigrationsFactoryService.php';
require __DIR__.'/ContainerYFvYqZt/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerYFvYqZt/getDebug_Security_Voter_Security_Access_RoleHierarchyVoterService.php';
require __DIR__.'/ContainerYFvYqZt/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerYFvYqZt/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerYFvYqZt/getDebug_FileLinkFormatter_UrlFormatService.php';
require __DIR__.'/ContainerYFvYqZt/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerYFvYqZt/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerYFvYqZt/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerYFvYqZt/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerYFvYqZt/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerYFvYqZt/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerYFvYqZt/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerYFvYqZt/getDataCollector_Request_SessionCollectorService.php';
require __DIR__.'/ContainerYFvYqZt/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerYFvYqZt/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerYFvYqZt/getCache_SystemClearerService.php';
require __DIR__.'/ContainerYFvYqZt/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerYFvYqZt/getCache_AppClearerService.php';
require __DIR__.'/ContainerYFvYqZt/getTemplateControllerService.php';
require __DIR__.'/ContainerYFvYqZt/getRedirectControllerService.php';
require __DIR__.'/ContainerYFvYqZt/getLoginFormAuthenticatorService.php';
require __DIR__.'/ContainerYFvYqZt/getUserRepositoryService.php';
require __DIR__.'/ContainerYFvYqZt/getStudentRepositoryService.php';
require __DIR__.'/ContainerYFvYqZt/getPunishmentRepositoryService.php';
require __DIR__.'/ContainerYFvYqZt/getGroupRepositoryService.php';
require __DIR__.'/ContainerYFvYqZt/getAbscenceRepositoryService.php';
require __DIR__.'/ContainerYFvYqZt/getUserTypeService.php';
require __DIR__.'/ContainerYFvYqZt/getStudentTypeService.php';
require __DIR__.'/ContainerYFvYqZt/getPunishmentTypeService.php';
require __DIR__.'/ContainerYFvYqZt/getGroupTypeService.php';
require __DIR__.'/ContainerYFvYqZt/getAbscenceTypeService.php';
require __DIR__.'/ContainerYFvYqZt/getUserControllerService.php';
require __DIR__.'/ContainerYFvYqZt/getStudentControllerService.php';
require __DIR__.'/ContainerYFvYqZt/getSecurityControllerService.php';
require __DIR__.'/ContainerYFvYqZt/getPunishmentControllerService.php';
require __DIR__.'/ContainerYFvYqZt/getGroupControllerService.php';
require __DIR__.'/ContainerYFvYqZt/getAbscenceControllerService.php';
require __DIR__.'/ContainerYFvYqZt/get_Session_DeprecatedService.php';
require __DIR__.'/ContainerYFvYqZt/get_ServiceLocator_Z0pCzx9Service.php';
require __DIR__.'/ContainerYFvYqZt/get_ServiceLocator_Cuv0NPyService.php';
require __DIR__.'/ContainerYFvYqZt/get_ServiceLocator_Ch4JgvlService.php';
require __DIR__.'/ContainerYFvYqZt/get_ServiceLocator_BsYqzo6Service.php';
require __DIR__.'/ContainerYFvYqZt/get_ServiceLocator_W9y3dzmService.php';
require __DIR__.'/ContainerYFvYqZt/get_ServiceLocator_UDgw6OlService.php';
require __DIR__.'/ContainerYFvYqZt/get_ServiceLocator_P8gYjlhService.php';
require __DIR__.'/ContainerYFvYqZt/get_ServiceLocator_NHrpuLYService.php';
require __DIR__.'/ContainerYFvYqZt/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerYFvYqZt/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerYFvYqZt/get_ServiceLocator__Ae5NXwService.php';
require __DIR__.'/ContainerYFvYqZt/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerYFvYqZt/get_Container_Private_Form_Type_FileService.php';
require __DIR__.'/ContainerYFvYqZt/get_Container_Private_Form_FactoryService.php';
require __DIR__.'/ContainerYFvYqZt/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerYFvYqZt/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\WebProfilerBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Bundle\DebugBundle\DebugBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\WebpackEncoreBundle\WebpackEncoreBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\DumpExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension';
$classes[] = 'Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Component\Validator\Validator\TraceableValidator';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\AbscenceController';
$classes[] = 'App\Controller\GroupController';
$classes[] = 'App\Controller\PunishmentController';
$classes[] = 'App\Controller\SecurityController';
$classes[] = 'App\Controller\StudentController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'App\Form\AbscenceType';
$classes[] = 'App\Form\GroupType';
$classes[] = 'App\Form\PunishmentType';
$classes[] = 'App\Form\StudentType';
$classes[] = 'App\Form\UserType';
$classes[] = 'App\Repository\AbscenceRepository';
$classes[] = 'App\Repository\GroupRepository';
$classes[] = 'App\Repository\PunishmentRepository';
$classes[] = 'App\Repository\StudentRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Security\LoginFormAuthenticator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Component\Cache\Adapter\TraceableAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\DumpDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataExtractor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\RequestDataCollector';
$classes[] = 'Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Bridge\Monolog\Processor\DebugProcessor';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\MigrationsFactory\ContainerAwareMigrationFactory';
$classes[] = 'Doctrine\Migrations\Version\MigrationFactory';
$classes[] = 'Doctrine\Migrations\DependencyFactory';
$classes[] = 'Doctrine\Migrations\Configuration\Migration\ExistingConfiguration';
$classes[] = 'Doctrine\Migrations\Configuration\Configuration';
$classes[] = 'Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration';
$classes[] = 'Doctrine\Migrations\Configuration\EntityManager\ManagerRegistryEntityManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Common\Cache\CacheProvider';
$classes[] = 'Doctrine\Common\Cache\Psr6\DoctrineProvider';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Monolog\Handler\NullHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\Profiler';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\FileProfilerStorage';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\TimeDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector';
$classes[] = 'Symfony\Component\Validator\DataCollector\ValidatorDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\EventDataCollector';
$classes[] = 'Symfony\Component\Cache\DataCollector\CacheDataCollector';
$classes[] = 'Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector';
$classes[] = 'Symfony\Bridge\Twig\DataCollector\TwigDataCollector';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Collector\MigrationsCollector';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Collector\MigrationsFlattener';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ProfilerListener';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Authentication\NoopAuthenticationManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Core\Security';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\VarDumper\Cloner\VarCloner';
$classes[] = 'Symfony\Component\VarDumper\Server\Connection';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\RouterController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\EntrypointLookup';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection';
$classes[] = 'Symfony\WebpackEncoreBundle\EventListener\ExceptionListener';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\TagRenderer';

Preloader::preload($classes);
