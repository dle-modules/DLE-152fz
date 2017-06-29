<?php
/*
 * DLE-152fz — соблюдаем ФЗ 152
 *
 * @author     ПафНутиЙ <pafnuty10@gmail.com>
 * @link       https://git.io/vQ8DG
 */


if (!defined('DATALIFEENGINE') || !defined('LOGGED_IN')) {
	die('Hacking attempt!');
}
$action = $_REQUEST['action'];
require_once ENGINE_DIR . '/modules/fz152/admin/functions.php';
if (!isset($action)) {
	require_once ENGINE_DIR . '/modules/fz152/admin/main.php';
}
echofooter();

