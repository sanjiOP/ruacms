<?php

/**
 * url route
 *
 *
 * 左边 请求地址
 * 右边 控制器/方法
 *
 *
 * url::to传参后，会找route右边的匹配(如带参数，必传)。匹配成功后根据左边规则生成url
 *
 * 浏览器访问url，route会匹配左边的规则，匹配成功路由解析到控制器/方法
 */


return [
    //request=>response
    //'detail/<id:\d+>' => 'blog/detail',
    'detail_<id:\d+>' => 'blog/detail',
];