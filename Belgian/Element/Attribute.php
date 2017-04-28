<?php 

/*
 *
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/belgianphp/element 
 * @copyright   2016 - 2017
 * 
 */

namespace Belgian\Element;

use Belgian\Element\IAttribute;




class Attribute implements IAttribute
{

    private $attr;



    public function __construct($key, $value = NULL)
    {
        self::_set($key, $value);
    }





    public function getAttribute()
    {
        return  $this->attr;
    } 




    private function _set($key, $value)
    {
        $this->attr = self::_getAttributeKeyValue($key, $value); 
    } 





    private function _getAttributeKeyValue($key, $value)
    {
        $isNull    = (is_null($value));
        $keyValue  = sprintf('%s="%s"', $key, $value);

        return ($isNull)? $key: $keyValue;
    } 




}    


