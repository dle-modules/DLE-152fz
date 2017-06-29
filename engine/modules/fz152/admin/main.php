<?php

echoheader('DLE 152 ФЗ', 'Модуль для вывода информации, согласно ФЗ 152');
$cfg = include_once(ENGINE_DIR . '/data/fz152.php');

$personalDataExample = [
	'Фамилия, имя, отчество.',
	'Дата рождения.',
	'Адрес.',
	'Номер контактного телефона.',
	'Адрес электронной почты.',
];

$personalDataTargets = [
	'Выполнение Администрацией обязательств перед Пользователем в рамках настоящего Соглашения',
	'Продвижение товаров и услуг',
	'Направление информации о продуктах и услугах',
	'Направление уведомлений с сайта',
	'Подготовка и направление ответов на запросы Пользователя'
];
$personalDataActions = [
	'Сбор и накопление',
	'Хранение в течение установленных нормативными документами сроков хранения отчетности, но не менее трех лет, с момента даты оказания услуг Пользователю',
	'Уточнение (обновление, изменение)',
	'Использование',
	'Уничтожение',
	'Обезличивание',
	'Передача по требованию суда, в т.ч., третьим лицам, с соблюдением мер, обеспечивающих защиту персональных данных от несанкционированного доступа.',
];
?>
<style>
	.fz-number,
	.fz-medium {
		width: 60px;
		margin-right: 10px;
	}

	.fz-medium {
		width: 80px;
	}

	.fz-form-group {
		border-bottom: solid 1px #d5d5d5;
		padding-bottom: 15px;
		font-size: 14px;
	}

	.fz-form-group:last-child {
		border-bottom: 0;
		padding-bottom: 0;
		margin-bottom: 0;
	}

	.fz-form-group .control-label {
		font-size: 14px;
	}

	.fz-form-group .radio input[type="radio"] {
		margin-top: 3px;
	}

	.icheckbox_flat-aero + label,
	.iradio_flat-aero + label {
		font-size: 14px;
		cursor: pointer;
	}

	.dle-pre {
		max-height: none;
		font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
		white-space: pre-wrap;
	}

	.fz-input {
		display: block;
		width: 100%;
	}
</style>

<form method="post" class="form-horizontal">
	<div class="box">
		<div class="box-header">
			<div class="title">Параметры отображения текста соглашения</div>
		</div>
		<div class="box-content">
			<div class="row box-section">
				<div class="form-group fz-form-group">
					<label class="control-label col-md-3">
						Название компании/сайта
					</label>
					<div class="col-md-9">
						<input class="fz-input" type="text" name="cfg[siteName]"
						       value="<?php echo getVal($cfg, 'siteName', getVal($config, 'short_title')) ?>">
					</div>
				</div>
				<div class="form-group fz-form-group">
					<label class="control-label col-md-3">
						Email для отзыва разрешения на обработкку данных
					</label>
					<div class="col-md-9">
						<input class="fz-input" type="text" name="cfg[rejectEmail]"
						       value="<?php echo getVal($cfg, 'rejectEmail', getVal($config, 'admin_mail')) ?>">
					</div>
				</div>

				<div class="form-group fz-form-group">
					<label class="control-label col-md-3">
						Название компании/сайта
					</label>
					<div class="col-md-9">
						<input class="fz-input" type="text" name="cfg[siteName]"
						       value="<?php echo getVal($cfg, 'siteName', getVal($config, 'short_title')) ?>">
					</div>
				</div>

				<div class="form-group fz-form-group">
					<label class="control-label col-md-3">
						Какие персональные даные собираются
						<br>
						<small>Указывайте по одному типу данных на строку</small>
					</label>
					<div class="col-md-9">
						<textarea class="fz-input" name="cfg[dataTypes]" rows="10"><?php
							echo getVal($cfg, 'dataTypes', implode("\n", $personalDataExample));
							?></textarea>
					</div>
				</div>

				<div class="form-group fz-form-group">
					<label class="control-label col-md-3">
						Для каких целей собираются данные
						<br>
						<small>Указывайте по одной цели на строку</small>
					</label>
					<div class="col-md-9">
						<textarea class="fz-input" name="cfg[dataTargets]" rows="10"><?php
							echo getVal($cfg, 'dataTargets', implode("\n", $personalDataTargets));
							?></textarea>
					</div>
				</div>

				<div class="form-group fz-form-group">
					<label class="control-label col-md-3">
						Какие действия могут производиться с персональными данными
						<br>
						<small>Указывайте по одному типу действий на строку</small>
					</label>
					<div class="col-md-9">
						<textarea class="fz-input" name="cfg[dataActions]" rows="10"><?php
							echo getVal($cfg, 'dataActions', implode("\n", $personalDataActions));
							?></textarea>
					</div>
				</div>
				<div class="form-group fz-form-group">
					<label class="control-label col-md-3">
						Файл шаблонa соглашения
					</label>
					<div class="col-md-9">
						<select name="cfg[template]" class="uniform" style="min-width: 150px;">
							<option value="first">first
							</option>
							<option value="second">first
							</option>
						</select> .tpl
					</div>
				</div>

				<div class="form-group fz-form-group">
					<label class="control-label col-md-3">
						&nbsp;
					</label>
					<div class="col-md-9">
						<input type="hidden" name="mod" value="fz">
						<input type="hidden" name="user_hash" value="<?php echo $dle_login_hash ?>">
						<input type="submit" name="add" class="btn btn-lg btn-green" value="Сохранить">
						<a href="<?php echo $config['admin_path'] ?>?mod=fz" class="btn btn-lg btn-default">
							Предпросмотр сохранённых настроек
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>