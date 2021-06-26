<?php

namespace ContainerC2hw8nu;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder20c70 = null;
    private $initializer2b515 = null;
    private static $publicProperties5ad43 = [
        
    ];
    public function getConnection()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'getConnection', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'getMetadataFactory', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'getExpressionBuilder', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'beginTransaction', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'getCache', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->getCache();
    }
    public function transactional($func)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'transactional', array('func' => $func), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->transactional($func);
    }
    public function commit()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'commit', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->commit();
    }
    public function rollback()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'rollback', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'getClassMetadata', array('className' => $className), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'createQuery', array('dql' => $dql), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'createNamedQuery', array('name' => $name), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'createQueryBuilder', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'flush', array('entity' => $entity), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'clear', array('entityName' => $entityName), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->clear($entityName);
    }
    public function close()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'close', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->close();
    }
    public function persist($entity)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'persist', array('entity' => $entity), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'remove', array('entity' => $entity), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'refresh', array('entity' => $entity), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'detach', array('entity' => $entity), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'merge', array('entity' => $entity), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'contains', array('entity' => $entity), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'getEventManager', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'getConfiguration', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'isOpen', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'getUnitOfWork', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'getProxyFactory', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'initializeObject', array('obj' => $obj), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'getFilters', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'isFiltersStateClean', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'hasFilters', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return $this->valueHolder20c70->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer2b515 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder20c70) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder20c70 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder20c70->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, '__get', ['name' => $name], $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        if (isset(self::$publicProperties5ad43[$name])) {
            return $this->valueHolder20c70->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20c70;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder20c70;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20c70;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder20c70;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, '__isset', array('name' => $name), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20c70;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder20c70;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, '__unset', array('name' => $name), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20c70;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder20c70;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, '__clone', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        $this->valueHolder20c70 = clone $this->valueHolder20c70;
    }
    public function __sleep()
    {
        $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, '__sleep', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
        return array('valueHolder20c70');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2b515 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2b515;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer2b515 && ($this->initializer2b515->__invoke($valueHolder20c70, $this, 'initializeProxy', array(), $this->initializer2b515) || 1) && $this->valueHolder20c70 = $valueHolder20c70;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder20c70;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder20c70;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
