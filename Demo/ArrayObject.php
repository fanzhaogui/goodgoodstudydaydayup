<?php
/**
 * User: Andy
 * Date: 2019/1/7
 * Time: 23:17
 */
echo "<pre>";
$a = new ArrayObject();
$a["arr"] = "array data";
$a->prop = 'prop data';
print_r($a);

$b = new ArrayObject(array(), ArrayObject::ARRAY_AS_PROPS); //2
$b["arr"] = 'array data';
$b->prop = 'prop data';
print_r($b);

// Output:
/*
ArrayObject Object
(
    [prop] => prop data
    [storage:ArrayObject:private] => Array
    (
        [arr] => array data
    )
)
ArrayObject Object
(
    [storage:ArrayObject:private] => Array
    (
        [arr] => array data
        [prop] => prop data
    )
)
*/