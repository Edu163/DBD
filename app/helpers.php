<?php

function presentPrice($price)
{
    return money_format('$%i', $price / 100);
}

function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}
function getClass($object){
    return get_class($object);
}
