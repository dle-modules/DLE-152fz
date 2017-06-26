<?php
/*
 * DLE-Starter — "Hello Word" модуль для DLE
 *
 * @author     ПафНутиЙ <pafnuty10@gmail.com>
 * @link       https://git.io/vPLpe
 */

if (!defined('DATALIFEENGINE') || !defined('LOGGED_IN')) {
	die('Hacking attempt!');
}


echoheader('DLE 152 ФЗ', 'Модуль для вывода информации, согласно ФЗ 152');

echo '<div class="well relative">
		<span class="triangle-button green"><i class="icon-bell"></i></span>
		<p>Данный модуль находится в стадии разработки.</p>
		<p>
			Все предложения по улучшению модуля можно направлять <a class="btn btn-blue" href="https://github.com/dle-modules/DLE-152fz/issues/new" target="_blank">через систему тиккетов</a>
		</p>
</div>';


echofooter();

