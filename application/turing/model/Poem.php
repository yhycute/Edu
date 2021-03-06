<?php
namespace app\turing\model;
/**
 * Created by PhpStorm.
 * User: 60501
 * Date: 2016/11/4
 * Time: 18:38
 */
class Poem extends \think\Model
{
    protected $connection = [
        // 数据库类型
        'type'           => 'mysql',
        // 服务器地址
        'hostname'       => 'www.mario256.cn',
        // 数据库名
        'database'       => 'poem',
        // 用户名
        'username'       => 'root',
        // 密码
        'password'       => 'abc123',
        // 端口
        'hostport'       => '3306',
        // 连接dsn
        'dsn'            => '',
        // 数据库连接参数
        'params'         => [],
        // 数据库编码默认采用utf8
        'charset'        => 'utf8',
        // 数据库表前缀
        'prefix'         => '',
        // 数据库调试模式
        'debug'          => true,
        // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
        'deploy'         => 0,
        // 数据库读写是否分离 主从式有效
        'rw_separate'    => false,
        // 读写分离后 主服务器数量
        'master_num'     => 1,
        // 指定从服务器序号
        'slave_no'       => '',
        // 是否严格检查字段是否存在
        'fields_strict'  => true,
        // 数据集返回类型 array 数组 collection Collection对象
        'resultset_type' => 'array',
        // 是否自动写入时间戳字段
        'auto_timestamp' => true,
        // 是否需要进行SQL性能分析
        'sql_explain'    => false,
    ];

}