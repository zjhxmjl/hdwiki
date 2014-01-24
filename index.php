<?php
	
/*the hdwiki entrance */
error_reporting(0);
//error_reporting(E_ALL);

// @set_magic_quotes_runtime(false);从php5.3起已经弃用
if (version_compare(PHP_VERSION, '5.3.0', '<')) {
	@set_magic_quotes_runtime(false);
}
 ini_set('magic_quotes_runtime', 0);//关闭magic_quotes_runtime

$mtime = explode(' ', microtime());
$starttime = $mtime[1] + $mtime[0];
	
define('IN_HDWIKI', TRUE);
define('HDWIKI_ROOT', dirname(__FILE__));//返回路径的父目录

include HDWIKI_ROOT.'/model/hdwiki.class.php';

$hdwiki = new hdwiki();//新建一个类的实例
$hdwiki->run();
?>