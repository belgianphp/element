<?php 

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/belgianphp/element 
 * @copyright   2017 
 * 
 */


namespace Belgian\Element\Config; 


class TagAutoClose
{

    private static $tag =  array( 

        'area', 'base',  'basefont', 
        'br',   'col',   'frame', 'hr', 
        'img',  'input', 'link', 
        'meta', 'param'

    );



    public static function getAll()
    {
        return self::$tag;
    } 
    
    
}    


