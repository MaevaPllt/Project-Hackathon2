<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class City extends \App\Entity\City implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\City' . "\0" . 'id', '' . "\0" . 'App\\Entity\\City' . "\0" . 'zipcode', '' . "\0" . 'App\\Entity\\City' . "\0" . 'city', '' . "\0" . 'App\\Entity\\City' . "\0" . 'latitude', '' . "\0" . 'App\\Entity\\City' . "\0" . 'longitude', '' . "\0" . 'App\\Entity\\City' . "\0" . 'inseeCode', '' . "\0" . 'App\\Entity\\City' . "\0" . 'farmers', '' . "\0" . 'App\\Entity\\City' . "\0" . 'buyers', '' . "\0" . 'App\\Entity\\City' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\City' . "\0" . 'department'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\City' . "\0" . 'id', '' . "\0" . 'App\\Entity\\City' . "\0" . 'zipcode', '' . "\0" . 'App\\Entity\\City' . "\0" . 'city', '' . "\0" . 'App\\Entity\\City' . "\0" . 'latitude', '' . "\0" . 'App\\Entity\\City' . "\0" . 'longitude', '' . "\0" . 'App\\Entity\\City' . "\0" . 'inseeCode', '' . "\0" . 'App\\Entity\\City' . "\0" . 'farmers', '' . "\0" . 'App\\Entity\\City' . "\0" . 'buyers', '' . "\0" . 'App\\Entity\\City' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\City' . "\0" . 'department'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (City $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getZipcode(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipcode', []);

        return parent::getZipcode();
    }

    /**
     * {@inheritDoc}
     */
    public function setZipcode(int $zipcode): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipcode', [$zipcode]);

        return parent::setZipcode($zipcode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity(string $city): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude(float $latitude): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude(float $longitude): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getInseeCode(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInseeCode', []);

        return parent::getInseeCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setInseeCode($inseeCode): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInseeCode', [$inseeCode]);

        return parent::setInseeCode($inseeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getFarmers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFarmers', []);

        return parent::getFarmers();
    }

    /**
     * {@inheritDoc}
     */
    public function addFarmer(\App\Entity\Farmer $farmer): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFarmer', [$farmer]);

        return parent::addFarmer($farmer);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFarmer(\App\Entity\Farmer $farmer): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFarmer', [$farmer]);

        return parent::removeFarmer($farmer);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuyers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuyers', []);

        return parent::getBuyers();
    }

    /**
     * {@inheritDoc}
     */
    public function addBuyer(\App\Entity\Buyer $buyer): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBuyer', [$buyer]);

        return parent::addBuyer($buyer);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBuyer(\App\Entity\Buyer $buyer): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBuyer', [$buyer]);

        return parent::removeBuyer($buyer);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug(string $slug): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartment(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartment', []);

        return parent::getDepartment();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartment(int $department): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartment', [$department]);

        return parent::setDepartment($department);
    }

}
