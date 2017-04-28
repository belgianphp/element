<?php


/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/belgianphp/element 
 * @copyright   2014 - 2017 
 * 
 */


namespace Belgian\Element;

use Belgian\Element\Config\TagAutoClose;

class CreateElement implements IElement
{

    private $tagname;
    private $propertyObj;
    




    public function __construct($tagname)
    {
        $this->tagname = $tagname;
        $this->propertyObj = new PropertyObject();
        return $this;
    }





    public function addInnerText($inner)
    {
        $i = $this->propertyObj->getSingleton('inner');
        $i->append($inner);
        return $this;
    } 





    public function addInnerJoin(IGetElement $inner)
    {
        self::addInnerText( $inner->getElement() );
        return $this;
    } 





    public function setAttribute($name, $value = NULL)
    {
        $attr = new Attribute($name, $value);

        $a = $this->propertyObj->getSingleton('attr');
        $a->append($attr->getAttribute());

        return $this;
    } 





    public function getElement()
    {
        self::start();
        self::inner();
        $e = (array) $this->propertyObj->getSingleton('element');
        return implode('', $e);
    } 





    private function start()
    {
        $autoClose = '';

        $e = $this->propertyObj->getSingleton('element');

        $e->append('<');
        $e->append($this->tagname);

        self::setAttrs();

        if(in_array($this->tagname, TagAutoClose::getAll() ))
        {
            $this->inner   = NULL;
            $autoClose = ' /';
        }

        $e->append($autoClose);
        $e->append('>');

        return $this;

    } 






    private function inner()
    {
        $i = $this->propertyObj->getSingleton('inner');

        if($i->count()) 
        {
            $e = $this->propertyObj->getSingleton('element');

            foreach ($i as $inner) 
            {
                $e->append($inner);
            }

            $e->append('</' . $this->tagname . '>');
        }

        return $this;
    } 





    private function setAttrs()
    {
        $a = $this->propertyObj->getSingleton('attr');

        if($a->count())
        {
            $e = $this->propertyObj->getSingleton('element');

            foreach ($a as $propertyValue)
            {
                $attr = sprintf(' %s', $propertyValue);

                $e->append($attr);
            }

        }
        return $this;
    } 





}    

