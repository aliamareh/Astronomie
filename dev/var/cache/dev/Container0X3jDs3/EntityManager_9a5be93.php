<?php

namespace Container0X3jDs3;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfa570 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfaabf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties71b62 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'getConnection', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'getMetadataFactory', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'getExpressionBuilder', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'beginTransaction', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'getCache', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'transactional', array('func' => $func), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'commit', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->commit();
    }

    public function rollback()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'rollback', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'getClassMetadata', array('className' => $className), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'createQuery', array('dql' => $dql), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'createNamedQuery', array('name' => $name), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'createQueryBuilder', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'flush', array('entity' => $entity), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'clear', array('entityName' => $entityName), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->clear($entityName);
    }

    public function close()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'close', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->close();
    }

    public function persist($entity)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'persist', array('entity' => $entity), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'remove', array('entity' => $entity), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'refresh', array('entity' => $entity), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'detach', array('entity' => $entity), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'merge', array('entity' => $entity), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'contains', array('entity' => $entity), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'getEventManager', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'getConfiguration', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'isOpen', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'getUnitOfWork', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'getProxyFactory', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'initializeObject', array('obj' => $obj), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'getFilters', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'isFiltersStateClean', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'hasFilters', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return $this->valueHolderfa570->hasFilters();
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

        $instance->initializerfaabf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfa570) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfa570 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfa570->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, '__get', ['name' => $name], $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        if (isset(self::$publicProperties71b62[$name])) {
            return $this->valueHolderfa570->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa570;

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

        $targetObject = $this->valueHolderfa570;
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
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa570;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfa570;
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
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, '__isset', array('name' => $name), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa570;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfa570;
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
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, '__unset', array('name' => $name), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa570;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfa570;
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
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, '__clone', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        $this->valueHolderfa570 = clone $this->valueHolderfa570;
    }

    public function __sleep()
    {
        $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, '__sleep', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;

        return array('valueHolderfa570');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfaabf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfaabf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfaabf && ($this->initializerfaabf->__invoke($valueHolderfa570, $this, 'initializeProxy', array(), $this->initializerfaabf) || 1) && $this->valueHolderfa570 = $valueHolderfa570;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfa570;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfa570;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
