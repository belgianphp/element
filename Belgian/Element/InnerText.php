<?php 

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/belgianphp/element 
 * @copyright   2016 - 2017
 * 
 */

namespace Belgian\Element;

use Belgian\Element\Inner;


class InnerText implements IInner
{

    private $inner;

    public function __construct($inner)
    {
        $this->inner = $inner;
    }



    public function getInner()
    {
        return  $this->inner;
    } 



}    

