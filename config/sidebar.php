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
        'child' => [
            'list' => [
                'url' => '/admin/goods/list',
                'name' => '产品列表',
            ],
            'add' => [
                'url' => '/admin/goods/add',
                'name' => '添加产品',
            ]
        ]
    ],
    'category' => [
        'url' => '/admin/category/index',
        'name' => '分类管理',
        'icon' => 'fa-sitemap',
        'child' => [
            'list' => [
                'url' => '/admin/category/list',
                'name' => '分类列表'
            ],
            'add' => [
                'url' => '/admin/category/add',
                'name' => '添加分类'
            ]
        ]
    ]

];