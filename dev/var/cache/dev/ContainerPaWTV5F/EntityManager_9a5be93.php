<?php

namespace ContainerPaWTV5F;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfd839 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd143a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6ae7a = [
        
    ];

    public function getConnection()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'getConnection', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'getMetadataFactory', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'getExpressionBuilder', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'beginTransaction', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'getCache', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'transactional', array('func' => $func), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'commit', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->commit();
    }

    public function rollback()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'rollback', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'getClassMetadata', array('className' => $className), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'createQuery', array('dql' => $dql), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'createNamedQuery', array('name' => $name), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'createQueryBuilder', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'flush', array('entity' => $entity), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'clear', array('entityName' => $entityName), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->clear($entityName);
    }

    public function close()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'close', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->close();
    }

    public function persist($entity)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'persist', array('entity' => $entity), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'remove', array('entity' => $entity), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'refresh', array('entity' => $entity), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'detach', array('entity' => $entity), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'merge', array('entity' => $entity), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'contains', array('entity' => $entity), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'getEventManager', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'getConfiguration', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'isOpen', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'getUnitOfWork', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'getProxyFactory', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'initializeObject', array('obj' => $obj), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'getFilters', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'isFiltersStateClean', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'hasFilters', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return $this->valueHolderfd839->hasFilters();
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

        $instance->initializerd143a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfd839) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfd839 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfd839->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, '__get', ['name' => $name], $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        if (isset(self::$publicProperties6ae7a[$name])) {
            return $this->valueHolderfd839->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd839;

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

        $targetObject = $this->valueHolderfd839;
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
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd839;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfd839;
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
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, '__isset', array('name' => $name), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd839;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfd839;
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
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, '__unset', array('name' => $name), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd839;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfd839;
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
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, '__clone', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        $this->valueHolderfd839 = clone $this->valueHolderfd839;
    }

    public function __sleep()
    {
        $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, '__sleep', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;

        return array('valueHolderfd839');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd143a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd143a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd143a && ($this->initializerd143a->__invoke($valueHolderfd839, $this, 'initializeProxy', array(), $this->initializerd143a) || 1) && $this->valueHolderfd839 = $valueHolderfd839;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfd839;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfd839;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
