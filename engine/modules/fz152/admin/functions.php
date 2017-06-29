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
/**
 * @param $arr
 * @param $key
 *
 * @return mixed
 */
function findKey($arr, $key) {
	return $arr[$key];
}

/**
 * @param array  $data
 * @param string $keyString
 * @param bool   $fallback
 *
 * @return mixed
 */
function getVal($data = [], $keyString = '', $fallback = false) {
	$keys = explode('.', $keyString);
	if (isset($data[$keys[0]])) {
		foreach ($keys as $key) {
			$data = findKey($data, $key);
		}

		return $data;
	} else {
		return $fallback;
	}
}

/**
 * @param array $module_config
 */
function saveConfig($module_config = []) {

	$handler = fopen(ENGINE_DIR . '/data/fz152.php', "w");
	fwrite($handler, "<?php \n/**\n * Конфиг модуля DLE-152fz\n * @var array\n */\n\n\$return [\n");
	foreach ($module_config as $name => $value) {
		if (is_numeric($value)) {
			fwrite($handler, "\t'{$name}' => {$value},\n");
		} else {
			fwrite($handler, "\t'{$name}' => '{$value}',\n");
		}
	}
	fwrite($handler, "];");
	fclose($handler);
}

