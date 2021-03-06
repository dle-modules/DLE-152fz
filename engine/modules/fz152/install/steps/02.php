<?php
/*
 * DLE-152fz — соблюдаем ФЗ 152
 *
 * @author     ПафНутиЙ <pafnuty10@gmail.com>
 * @link       https://git.io/vQ8DG
 */



/**
 * Этот файл отвечает за первый шаг установки модуля
 */
return [

	// Заголовок щага
	'header' => 'Добавление скриптов модуля',

	// Текст с описанием шага шага
	'text' => 'В шаблоне <b>%THEME%/main.tpl</b>',

	// Код, который необходимо вставить
	// 'paste' => 'someCode to paste',

	// Код, который необходимо найти
	'find' => '{AJAX}',

	// Код, который необходимо вставить перед найденным
	// 'addBefore' => '',

	// Код, который необходимо вставить после найденного
	 'addAfter' => '<script src="{THEME}/fz152/js/scripts.js"></script>',


	// Код, которым необходимо заменить найденное
	// 'replace' => 'someCode to replace'
];
