<?php

namespace ContainerMUOyZVI;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2d7d9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer39a28 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3c5e7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'getConnection', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'getMetadataFactory', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'getExpressionBuilder', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'beginTransaction', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'getCache', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->getCache();
    }

    public function transactional($func)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'transactional', array('func' => $func), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->transactional($func);
    }

    public function commit()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'commit', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->commit();
    }

    public function rollback()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'rollback', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'getClassMetadata', array('className' => $className), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'createQuery', array('dql' => $dql), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'createNamedQuery', array('name' => $name), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'createQueryBuilder', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'flush', array('entity' => $entity), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'clear', array('entityName' => $entityName), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->clear($entityName);
    }

    public function close()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'close', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->close();
    }

    public function persist($entity)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'persist', array('entity' => $entity), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'remove', array('entity' => $entity), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'refresh', array('entity' => $entity), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'detach', array('entity' => $entity), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'merge', array('entity' => $entity), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'getRepository', array('entityName' => $entityName), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'contains', array('entity' => $entity), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'getEventManager', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'getConfiguration', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'isOpen', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'getUnitOfWork', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'getProxyFactory', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'initializeObject', array('obj' => $obj), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'getFilters', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'isFiltersStateClean', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'hasFilters', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return $this->valueHolder2d7d9->hasFilters();
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

        $instance->initializer39a28 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2d7d9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2d7d9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2d7d9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, '__get', ['name' => $name], $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        if (isset(self::$publicProperties3c5e7[$name])) {
            return $this->valueHolder2d7d9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d7d9;

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

        $targetObject = $this->valueHolder2d7d9;
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
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d7d9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2d7d9;
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
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, '__isset', array('name' => $name), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d7d9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2d7d9;
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
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, '__unset', array('name' => $name), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d7d9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2d7d9;
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
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, '__clone', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        $this->valueHolder2d7d9 = clone $this->valueHolder2d7d9;
    }

    public function __sleep()
    {
        $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, '__sleep', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;

        return array('valueHolder2d7d9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer39a28 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer39a28;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer39a28 && ($this->initializer39a28->__invoke($valueHolder2d7d9, $this, 'initializeProxy', array(), $this->initializer39a28) || 1) && $this->valueHolder2d7d9 = $valueHolder2d7d9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2d7d9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2d7d9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
