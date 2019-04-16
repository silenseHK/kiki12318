<?php
/**
 * Created by PhpStorm.
 * User: 27989
 * Date: 2019/4/10
 * Time: 22:43
 */

return [

    'admins' => [
        'url' => '',
        'name' => '管理员管理',
        'icon' => 'fa-user',
        'child' => [
            'list' => [
                'url' => '/admin/admins/list',
                'name' => '管理员列表',
            ],
            'add' => [
                'url' => '/admin/admins/add',
                'name' => '添加管理员'
            ]
        ]
    ],
    'goods' => [
        'url' => '/admin/goods/index',
        'name' => '产品管理',
        'icon' => 'fa-cube',
    ]

];