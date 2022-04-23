<?php

namespace ContainerVPX9s2r;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf5ba4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1ac3e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7def7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'getConnection', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'getMetadataFactory', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'getExpressionBuilder', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'beginTransaction', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'getCache', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'transactional', array('func' => $func), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->transactional($func);
    }

    public function commit()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'commit', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->commit();
    }

    public function rollback()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'rollback', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'getClassMetadata', array('className' => $className), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'createQuery', array('dql' => $dql), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'createNamedQuery', array('name' => $name), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'createQueryBuilder', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'flush', array('entity' => $entity), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'clear', array('entityName' => $entityName), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->clear($entityName);
    }

    public function close()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'close', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->close();
    }

    public function persist($entity)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'persist', array('entity' => $entity), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'remove', array('entity' => $entity), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'refresh', array('entity' => $entity), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'detach', array('entity' => $entity), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'merge', array('entity' => $entity), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'contains', array('entity' => $entity), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'getEventManager', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'getConfiguration', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'isOpen', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'getUnitOfWork', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'getProxyFactory', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'initializeObject', array('obj' => $obj), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'getFilters', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'isFiltersStateClean', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'hasFilters', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return $this->valueHolderf5ba4->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer1ac3e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf5ba4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf5ba4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf5ba4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, '__get', ['name' => $name], $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        if (isset(self::$publicProperties7def7[$name])) {
            return $this->valueHolderf5ba4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5ba4;

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

        $targetObject = $this->valueHolderf5ba4;
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
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5ba4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf5ba4;
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
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, '__isset', array('name' => $name), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5ba4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf5ba4;
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
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, '__unset', array('name' => $name), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5ba4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf5ba4;
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
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, '__clone', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        $this->valueHolderf5ba4 = clone $this->valueHolderf5ba4;
    }

    public function __sleep()
    {
        $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, '__sleep', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;

        return array('valueHolderf5ba4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1ac3e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1ac3e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1ac3e && ($this->initializer1ac3e->__invoke($valueHolderf5ba4, $this, 'initializeProxy', array(), $this->initializer1ac3e) || 1) && $this->valueHolderf5ba4 = $valueHolderf5ba4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf5ba4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf5ba4;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
