<?php 

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/belgianphp/element 
 * @copyright   2016 - 2017 
 * 
 */

namespace Belgian\Element;

use Belgian\Element\IInner;
use Belgian\Element\IGetElement;

class InnerJoin implements IInner
{

    private $inner;


    public function __construct(IGetElement $inner)
    {
        $this->inner = $inner;
    }



    public function getInner()
    {
        return  $this->inner->getElement();
    } 



}    



