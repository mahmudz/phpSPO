<?php

/**
 * Generated by phpSPO model generator 2020-05-23T13:38:50+00:00 
 */
namespace Office365\Graph;


use Office365\Runtime\ClientObject;

class Entity extends ClientObject
{
    /**
     * @return string
     */
    public function getId()
    {
        if (!$this->isPropertyAvailable("Id")) {
            return null;
        }
        return $this->getProperty("Id");
    }
    /**
     * @var string
     */
    public function setId($value)
    {
        $this->setProperty("id", $value, true);
    }

    function setProperty($name, $value, $persistChanges = true)
    {
        $name = ucfirst($name);
        parent::setProperty($name, $value, $persistChanges);
    }

}