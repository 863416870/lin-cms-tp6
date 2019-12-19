<?php

return [
    'inject' => [
        'enable'     => true,
        'namespaces' => [],
    ],
    'route'  => [
        'enable'      => true,
        'controllers' => [],
    ],
    'ignore' => [],
    'management' => true, # 文档管理平台控制： true打开｜false关闭
    'custom' => [
        # 格式：注解类 => 注解操作类
        \app\annotation\Param::class => \app\annotation\handler\Param::class, # 单个参数验证器
        \app\annotation\Jwt::class => \app\annotation\handler\Jwt::class, # JWT注解验证器
        \app\annotation\Doc::class => \app\annotation\handler\Doc::class, # 文档管理器
        \app\annotation\Logger::class => \app\annotation\handler\Logger::class,# cms日志记录器
        \app\annotation\Auth::class => \app\annotation\handler\Auth::class,# cms权限注解器
    ]
];