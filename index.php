<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
 
 /**
* @无作为
* www.wuzuowei.com
*/
//代理IP直接退出
empty($_SERVER['HTTP_VIA']) or exit('Access Denied');
//防止快速刷新
session_start();
$seconds = '3'; //时间段[秒]
$refresh = '5'; //刷新次数
//设置监控变量
$cur_time = time();
if(isset($_SESSION['last_time'])){
$_SESSION['refresh_times'] += 1;
}else{
$_SESSION['refresh_times'] = 1;
$_SESSION['last_time'] = $cur_time;
}
//处理监控结果
if($cur_time - $_SESSION['last_time'] < $seconds){
if($_SESSION['refresh_times'] >= $refresh){
//跳转至攻击者服务器地址
header(sprintf('Location:%s', 'http://127.0.0.1'));
exit('Access Denied');
}
}else{
$_SESSION['refresh_times'] = 0;
$_SESSION['last_time'] = $cur_time;
}
 

define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
