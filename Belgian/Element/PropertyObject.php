<?php

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/belgianphp/element 
 * @copyright   2017 
 * 
 */


namespace Belgian\Element; 

use ArrayObject;

class PropertyObject implements IPropertyObject
{

    private $attr    = NULL;
    private $inner   = NULL;
    private $element = NULL;

    public function __construct() { }

    public function getSingleton($classProperty)
    {
        if(!$this->$classProperty)
        {
            $this->$classProperty = new ArrayObject();
        }

        return $this->$classProperty;
    } 


}    


