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
		if(is_array($data)) {
			$data = implode("\n", $data);
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
	fwrite($handler, "<?php \n/**\n * Конфиг модуля DLE-152fz\n * @var array\n */\n\nreturn [\n");
	foreach ($module_config as $name => $value) {
		if (is_numeric($value)) {
			fwrite($handler, "\t'{$name}' => {$value},\n");
		} else {
			if (in_array($name, ['dataTypes', 'dataTargets', 'dataActions'])) {
				$value = explode("\n", $value);
				fwrite($handler, "\t'{$name}' => [ ");
				foreach ($value as $val) {
					$val = trim($val);
					if($val !== '') {
						fwrite($handler, "'{$val}', ");
					}
				}
				fwrite($handler, "],\n");
			} else {
				fwrite($handler, "\t'{$name}' => '{$value}',\n");
			}
		}
	}
	fwrite($handler, "];");
	fclose($handler);
}

function removeConfig() {
	unlink(ENGINE_DIR . '/data/fz152.php');
}

