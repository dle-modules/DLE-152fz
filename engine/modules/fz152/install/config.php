<?php
/*
 * DLE-152fz — соблюдаем ФЗ 152
 *
 * @author     ПафНутиЙ <pafnuty10@gmail.com>
 * @link       https://git.io/vQ8DG
 */


/**
 * Конфигурация установщика модуля
 */
return [
	// Идентификатор модуля (он же имя иконки модуля в адмике)
	'moduleName'    => 'fz152',

	// Название модуля - показывается как в установщике, так и в админке.
	'moduleTitle'   => 'DLE 152 ФЗ',

	// Описание модуля - показывается как в установщике, так и в админке.
	'moduleDescr'   => 'Модуль для вывода информации, согласно ФЗ 152',

	// Версия модуля
	'moduleVersion' => '1.0.0',

	// Дата выпуска модуля
	'moduleDate'    => '26.06.2017',

	// Версии DLE, поддержваемые модулем
	'minVersion'    => '11.1',

	'maxVersion'   => '',

	// Устанавливать админку (true/false). Включает показ кнопки установки и удаления админки.
	'installAdmin' => true,

	// ID групп, для которых доступно управление модулем в админке.
	'allowGroups'  => '1',

	'defaultFormConfig' => [
		'personalDataExample' => [
			'Фамилия, имя, отчество.',
			'Дата рождения.',
			'Адрес.',
			'Номер контактного телефона.',
			'Адрес электронной почты.',
		],

		'personalDataTargets' => [
			'Выполнение Администрацией обязательств перед Пользователем в рамках настоящего Соглашения',
			'Продвижение товаров и услуг',
			'Направление информации о продуктах и услугах',
			'Направление уведомлений с сайта',
			'Подготовка и направление ответов на запросы Пользователя'
		],

		'personalDataActions' => [
			'Сбор и накопление',
			'Хранение в течение установленных нормативными документами сроков хранения отчетности, но не менее трех лет, с момента даты оказания услуг Пользователю',
			'Уточнение (обновление, изменение)',
			'Использование',
			'Уничтожение',
			'Обезличивание',
			'Передача по требованию суда, в т.ч., третьим лицам, с соблюдением мер, обеспечивающих защиту персональных данных от несанкционированного доступа.',
		],
	]
];
