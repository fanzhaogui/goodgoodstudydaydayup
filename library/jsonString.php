<?php
/**
 * User: Andy
 * Date: 2018/12/16
 * Time: 22:43
 */

$arr = [ // 不是 0 开始，会输出对象
    1 => 'item1',
    2 => 'item2',
    3 => 'item3',
];
echo "输出对象: ", json_encode($arr), "<br>";
// 输出对象: {"1":"item1","2":"item2","3":"item3"}

$arr = [ // 连续索引，输出数组
    0 => 'item1',
    1 => 'item2',
    2 => 'item3',
];
echo "输出数组: ", json_encode($arr), "\n<br>";
echo "输出对象: ", json_encode($arr, JSON_FORCE_OBJECT), "\n<br>";
// 输出数组: ["item1","item2","item3"]

$arr = [ // 连续索引，输出数组
    'item1',
    'item2',
    'item3',
];
echo "输出数组: ", json_encode($arr), "\n<br>";
// 输出数组: ["item1","item2","item3"]

$arr = [ // 索引不连续，输出对象
    0 => 'item1',
    1 => 'item2',
    2 => 'item3',
    5 => 'item5',
];
echo "输出对象: ", json_encode($arr), "\n<br>";
// 输出对象: {"0":"item1","1":"item2","2":"item3","5":"item5"}

$arr = [ // 包含关联索引，一定输出对象
    0 => 'item1',
    1 => 'item2',
    2 => 'item3',
    'other' => '其他字段'
];
echo "输出对象: ", json_encode($arr), "\n<br>";
// 输出对象: {"0":"item1","1":"item2","2":"item3","other":"\u5176\u4ed6\u5b57\u6bb5"}

// 关联数组 + 索引数组 实例
$arr = [ // 关联数组
    'other' => '其他字段',
    'count' => 3, // 数组个数
    'list' => [ // 索引数组
        'item1',
        'item2',
        'item3',
    ],
];
echo "对象+数组: ", json_encode($arr), "\n<br>";
// 对象+数组: {"other":"\u5176\u4ed6\u5b57\u6bb5","count":3,"list":["item1","item2","item3"]}