<?php

// 注册的command
$command = [
    '\Command\DemoCommand',
];

// 数据库配置
$db = [];



return compact('command', 'db');