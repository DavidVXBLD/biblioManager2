<?php

namespace ContainerWiCoxKH;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbb2ee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer16d1e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties81f25 = [
        
    ];

    public function getConnection()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'getConnection', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'getMetadataFactory', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'getExpressionBuilder', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'beginTransaction', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'getCache', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->getCache();
    }

    public function transactional($func)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'transactional', array('func' => $func), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'wrapInTransaction', array('func' => $func), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'commit', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->commit();
    }

    public function rollback()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'rollback', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'getClassMetadata', array('className' => $className), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'createQuery', array('dql' => $dql), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'createNamedQuery', array('name' => $name), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'createQueryBuilder', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'flush', array('entity' => $entity), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'clear', array('entityName' => $entityName), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->clear($entityName);
    }

    public function close()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'close', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->close();
    }

    public function persist($entity)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'persist', array('entity' => $entity), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'remove', array('entity' => $entity), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'refresh', array('entity' => $entity), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'detach', array('entity' => $entity), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'merge', array('entity' => $entity), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'getRepository', array('entityName' => $entityName), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'contains', array('entity' => $entity), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'getEventManager', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'getConfiguration', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'isOpen', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'getUnitOfWork', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'getProxyFactory', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'initializeObject', array('obj' => $obj), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'getFilters', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'isFiltersStateClean', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'hasFilters', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return $this->valueHolderbb2ee->hasFilters();
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

        $instance->initializer16d1e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbb2ee) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbb2ee = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbb2ee->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, '__get', ['name' => $name], $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        if (isset(self::$publicProperties81f25[$name])) {
            return $this->valueHolderbb2ee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb2ee;

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

        $targetObject = $this->valueHolderbb2ee;
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
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb2ee;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbb2ee;
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
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, '__isset', array('name' => $name), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb2ee;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbb2ee;
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
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, '__unset', array('name' => $name), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb2ee;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbb2ee;
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
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, '__clone', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        $this->valueHolderbb2ee = clone $this->valueHolderbb2ee;
    }

    public function __sleep()
    {
        $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, '__sleep', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;

        return array('valueHolderbb2ee');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer16d1e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer16d1e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer16d1e && ($this->initializer16d1e->__invoke($valueHolderbb2ee, $this, 'initializeProxy', array(), $this->initializer16d1e) || 1) && $this->valueHolderbb2ee = $valueHolderbb2ee;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbb2ee;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbb2ee;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
